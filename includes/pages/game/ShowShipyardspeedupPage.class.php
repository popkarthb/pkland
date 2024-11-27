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


class ShowShipyardspeedupPage extends AbstractGamePage
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
     * @return false|string|void
     * @throws Exception
     * @author jeff
     */
    public function speedup()
    {
        global $PLANET, $USER, $resource;

        $diamond = HTTP::_GP('diamond', 0);
        $auftr = HTTP::_GP('auftr', '');


        $ElementQueue = unserialize($PLANET['b_hangar_id']);
        // 如果队列为空
        if (empty($ElementQueue)) {
            return json_encode(array('code'=>-2, 'msg'=>'当前建造队列为空!!！'));
        }

        if ($auftr == '') {
            return json_encode(array('code'=>-1, 'msg'=>'请选择要加速的目标！'));
        }

        if ($USER['darkmatter'] < $diamond) {
            return json_encode(array('code'=>-1, 'msg'=>'钻石不足！'));
        }

        $SpeedupArray = explode(',', $auftr);

        if (count($SpeedupArray) > 1) {
            return json_encode(array('code'=>-1, 'msg'=>'一次只能加速一个目标！'));
        }


        $config = Config::get();
        $speed_up_seconds = $config->speed_up_seconds * $diamond ; // 用户选择的钻石数可以加速的总秒数


        foreach ($SpeedupArray as $Auftr)
        {
            if(!isset($ElementQueue[$Auftr])) {
                continue;
            }

            if($Auftr == 0) {
                $PLANET['b_hangar']	= 0;
            }

            $Element		= $ElementQueue[$Auftr][0];
            $Count			= $ElementQueue[$Auftr][1];
            // 建造每个单位所用的时间
            $ElementTime  	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element);

            // 能加速的个数
            $speedupCount = intval($speed_up_seconds / $ElementTime);

            $ElementQueue[$Auftr][1] -= $speedupCount;

            if ($ElementQueue[$Auftr][1] < 0 || $speedupCount >= $Count) {
                unset($ElementQueue[$Auftr]);
            }

            $PLANET[$resource[$Element]]	+= $speedupCount;

        }

        if(empty($ElementQueue)) {
            $PLANET['b_hangar_id']	= '';
        } else {
            $PLANET['b_hangar_id']	= serialize(array_values($ElementQueue));
        }

        $sql = 'UPDATE %%PLANETS%% SET ' . $resource[$Element] . ' = ' . $PLANET[$resource[$Element]] . '  where id='.$PLANET['id'];
        Database::get()->update($sql);

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

        $auftr = HTTP::_GP('auftr', '');

        $QueueTime = 0;
        $SpeedupArray = explode(',', $auftr);

        $ElementQueue = unserialize($PLANET['b_hangar_id']);

        foreach ($SpeedupArray as $Auftr)
        {
            if(!isset($ElementQueue[$Auftr])) {
                continue;
            }

            if($Auftr == 0) {
                $PLANET['b_hangar']	= 0;
            }

            $Element		= $ElementQueue[$Auftr][0];
            $Count			= $ElementQueue[$Auftr][1];

            // 建造每个单位所用的时间
            $ElementTime  	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element);
            $QueueTime   	+= $ElementTime * $Count;
        }

        // 总剩余时间
        $totalRestTime = max($QueueTime - $PLANET['b_hangar'],0);

        $availableDarkmatter = ceil($totalRestTime / Config::get()->speed_up_seconds);
        if ($availableDarkmatter > $USER['darkmatter']) {
            $availableDarkmatter = $USER['darkmatter'];
        }

        $this->assign(array(
            'speed_up_seconds'	=> Config::get()->speed_up_seconds,
            'darkmatter' => $USER['darkmatter'],
            'availableDarkmatter' => $availableDarkmatter,
            'from' => 'shipyard',
            'auftr' => $auftr,
        ));

        $this->display('page.speedup.shipyard.default.tpl');
    }
}