<?php

/**
 *  2Moons
 *   by Jan-Otto Kröpke 2009-2016
 *
 * For the full copyright and license information, please view the LICENSE
 *
 * @package 2Moons
 * @author Jan-Otto Kröpke <slaver7@gmail.com>
 * @copyright 2009 Lucky
 * @copyright 2016 Jan-Otto Kröpke <slaver7@gmail.com>
 * @licence MIT
 * @version 1.8.0
 * @link https://github.com/jkroepke/2Moons
 */


class ShowSpeedupPage extends AbstractGamePage
{
    public static $requireModule = MODULE_INFORMATION;
    protected $disableEcoSystem = true;
    function __construct()
    {
        parent::__construct();
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            echo $this->speedup();
            exit();
        }
    }


    /**
     * 建造加速
     * @author jeff
     * @return void
     * @throws Exception
     */
    public function speedup()
    {
        global $PLANET, $USER, $resource;

        $diamond = HTTP::_GP('diamond', 0);

        if ($USER['darkmatter'] < $diamond) {
            return json_encode(array('code'=>-1, 'msg'=>'钻石不足！'));
        }

        $from = $_GET['from'];
        if ($from == 'building') {
            // 获取当前建造队列
            $CurrentQueue  = unserialize($PLANET['b_building_id']);
        } else if ($from == 'tech') {
            $CurrentQueue   = unserialize($USER['b_tech_queue']);
        }

        // 如果队列为空
        if (empty($CurrentQueue))
        {
            return json_encode(array('code'=>-2, 'msg'=>'当前建造队列为空！'));
        }

        $config = Config::get();
        $speed_up_seconds = $config->speed_up_seconds * $diamond ;

        $CurrentBuilding = $CurrentQueue[0];
        $CurrentBuilding[3] -= $speed_up_seconds; // 建造停止时间
        $CurrentQueue[0] = $CurrentBuilding;

        if ($from == 'building') {
            $PLANET['b_building']    	-= $speed_up_seconds; // 建造用时
            $PLANET['b_building_id'] 	= serialize($CurrentQueue);
        } else if ($from == 'tech') {
            $USER['b_tech']    	-= $speed_up_seconds; // 建造用时
            $USER['b_tech_queue'] 	= serialize($CurrentQueue);
        }


        $this->ecoObj	= new ResourceUpdate();
        $this->ecoObj->CalcResource();

        // 更新钻石数
        $USER['darkmatter'] -= $diamond; // 减钻石
        $this->ecoObj->setData($USER, $PLANET);
        $this->save();

        return json_encode(array('code'=>0, 'msg'=>'加速成功！'));
    }

    function show()
    {
        global $LNG, $PLANET, $USER;

        $this->setWindow('popup');
        $this->initTemplate();

        $totalRestTime = 0;

        $from = $_GET['from'];
        if ($from == 'building') {
            $buildQueue	= unserialize($PLANET['b_building_id']);
        } else if ($from == 'tech') {
            $buildQueue   = unserialize($USER['b_tech_queue']);
        }




        foreach($buildQueue as $BuildArray) {
            if ($BuildArray[3] < TIMESTAMP)
                continue;
            $totalRestTime += ($BuildArray[3] - TIMESTAMP);
        }

        $availableDarkmatter = ceil($totalRestTime / Config::get()->speed_up_seconds);
        if ($availableDarkmatter > $USER['darkmatter']) {
            $availableDarkmatter = $USER['darkmatter'];
        }

        $this->assign(array(
            'speed_up_seconds'	=> Config::get()->speed_up_seconds,
            'darkmatter' => $USER['darkmatter'],
            'availableDarkmatter' => $availableDarkmatter,
            'from' => $from,
        ));

        $this->display('page.speedup.default.tpl');
    }
}