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


class ShowTransmitPage extends AbstractGamePage
{
    public static $requireModule = MODULE_TRANSMIT;

    function __construct()
    {
        parent::__construct();
    }


    /**
     * 基地传送
     * @author jeff
     * @return void
     * @throws Exception
     */
    public function transport()
    {
        global $USER, $PLANET, $LNG;

        $galaxy			= HTTP::_GP('galaxy', 0);
        $system			= HTTP::_GP('system', 0);
        $planet			= HTTP::_GP('planet', 0);

        $config	= Config::get();
        $galaxy_max = $config->max_galaxy;
        $system_max = $config->max_system;
        $planet_max = $config->max_planets;

        if (preg_match('/\D/', $galaxy) || preg_match('/\D/', $system) || preg_match('/\D/', $planet) )
        {
            $this->printMessage($LNG['tp_data_error'], array(array(   //tp_data_error = “非法输入”
                'label'	=> $LNG['sys_forward'],
                'url'	=> 'game.php?page=transmit'
            )));
            return;
        }

        //是否超出地图范围
        if (0 >= $galaxy || $galaxy > $galaxy_max || 0 >= $system || $system > $system_max || 0 >= $planet || $planet > $planet_max)
        {
            $this->printMessage($LNG['tp_wrong_coordinate'].':'. $galaxy_max . ' ' . $system_max . ' ' . $planet_max, array(array(   //tp_wrong_planet_type = “传送失败，超出地图范围，当前地图范围: $galaxy_max $system_max $planet_max”
                'label'	=> $LNG['sys_forward'],
                'url'	=> 'game.php?page=transmit'
            )));
            return;
        }


        // 判断本基地是否可被传送
        $from_sql = "SELECT * FROM %%PLANETS%% WHERE id=:id";
        $from_result = Database::get()->select($from_sql, array(
            ':id' => $PLANET['id'],
        ));

        // 非主基地，不可以传送
        if ($from_result[0]['planet_type'] != 1) {
            $this->printMessage($LNG['tp_wrong_planet_type'], array(array(   //tp_wrong_planet_type = “传送失败，无法传送营地或废墟。”
                'label'	=> $LNG['sys_forward'],
                'url'	=> 'game.php?page=transmit'
            )));
            return;
        }


        // 判断目标基地是否可传送
        $into_sql = "SELECT * FROM %%PLANETS%% WHERE universe=:universe AND  galaxy=:galaxy AND system=:system AND planet=:planet";
        $into_result = Database::get()->select($into_sql, array(
            ':universe'	=> Universe::current(),
            ':galaxy'	=> $galaxy,
            ':system'		=> $system,
            ':planet' => $planet,
        ));

        // 目标存在，不可以传送
        if (count($into_result) > 0) {
            $this->printMessage($LNG['tp_target_exist'], array(array(   //tp_target_exist = “传送失败，目标已有基地。”
                'label'	=> $LNG['sys_forward'],
                'url'	=> 'game.php?page=transmit'
            )));
            return;
        }

        //钻石不够，不可以传送
        if ($USER['darkmatter'] < 1000) {
            $this->printMessage($LNG['tp_diamonds_not_enough'], array(array(   //tp_wrong_planet_type = “传送失败，钻石余额不足。”
                'label'	=> $LNG['sys_forward'],
                'url'	=> 'game.php?page=transmit'
            )));
            return;
        }

        // 更新当前基地坐标
        $sql = "UPDATE %%PLANETS%% SET galaxy=:galaxy,system=:system,planet=:planet WHERE id=:id";
        $result = Database::get()->update($sql, array(
            ':galaxy'	=> $galaxy,
            ':system'		=> $system,
            ':planet' => $planet,
            ':id' =>$PLANET['id'],
        ));

        if ($result) {
            // 更新钻石数
            $USER['darkmatter'] -= 1000; // 钻石减1000
            $this->ecoObj->setData($USER, $PLANET);
            $this->save();

            $this->printMessage($LNG['tp_success'], array(array(
                'label'	=> $LNG['sys_forward'],
                'url'	=> 'game.php?page=transmit'
            )));
        }
    }

    function show()
    {
        global $PLANET, $LNG, $pricelist, $resource, $reslist;

        $Cost		= array();

        $allowedShipIDs	= explode(',', Config::get()->trade_allowed_ships);

        foreach($allowedShipIDs as $shipID)
        {
            if(in_array($shipID, $reslist['fleet']) || in_array($shipID, $reslist['defense'])) {
                $Cost[$shipID]	= array($PLANET[$resource[$shipID]], $LNG['tech'][$shipID], $pricelist[$shipID]['cost']);
            }
        }

        if(empty($Cost))
        {
            $this->printMessage($LNG['ft_empty'], array(array(
                'label'	=> $LNG['sys_back'],
                'url'	=> 'game.php?page=fleetDealer'
            )));
        }

        $this->assign(array(
            'shipIDs'	=> $allowedShipIDs,
            'CostInfos'	=> $Cost,
            'Charge'	=> Config::get()->trade_charge,
        ));

        $this->display('page.transmit.default.tpl');
    }
}