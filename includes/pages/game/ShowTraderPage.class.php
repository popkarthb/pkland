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


class ShowTraderPage extends AbstractGamePage
{
	public static $requireModule = MODULE_TRADER;
	public static $Charge = array();
	
	function __construct() 
	{
		parent::__construct();
		$this->initializeCharge();
	}
	
    private function initializeCharge()
    {
        $hourlyFactor1 = $this->getHourlyFactor1();
		$hourlyFactor2 = $this->getHourlyFactor2();
		$hourlyFactor3 = $this->getHourlyFactor3();
        
        self::$Charge = array(
            901 => array(
				901 => 1, 
				902 => 1 * $hourlyFactor1, 
				903 => 1 * $hourlyFactor1,
				921 => 10000,),
            902 => array(
				901 => 1 / $hourlyFactor1 * 0.5, 
				902 => 1, 
				903 => 1,
				921 => 1000),
            903 => array(
				901 => 1 / $hourlyFactor1 * 0.5, 
				902 => 1, 
				903 => 1,
				921 => 1000),
			921 => array(
				901 => 1/10000/100000,
				902 => 1/10000/10000, 
				903 => 1/10000/10000,
				921 => 1),
        );
    }
	
	function getHourlyFactor1() {
		date_default_timezone_set('Asia/Shanghai');
		$currentHour = intval(date('g'));
		//var_dump('currentHour_buglog123:'.$currentHour);
		$hourlyFactors = array(
			1 => 3,
			2 => 4,
			3 => 7,
			4 => 6,
			5 => 5,
			6 => 7,
			7 => 10,
			8 => 3,
			9 => 6,
			10 => 3,
			11 => 10,
			12 => 8, 
		);
		$defaultFactor = 2;
		if (isset($hourlyFactors[$currentHour])) {
			$hourlyFactor = $hourlyFactors[$currentHour];
		} else {
			$hourlyFactor = $defaultFactor;
		}
		return $hourlyFactor;
	}
	
	function getHourlyFactor2() {
		date_default_timezone_set('America/New_York');
		$currentHour = intval(date('g'));
		//var_dump('currentHour_buglog123:'.$currentHour);
		$hourlyFactors = array(
			11 => 3,
			12 => 4,
			1 => 7,
			2 => 6,
			3 => 5,
			4 => 7,
			5 => 10,
			6 => 3,
			7 => 6,
			8 => 3,
			9 => 10,
			10 => 8,  
		);
		$defaultFactor = 2;
		if (isset($hourlyFactors[$currentHour])) {
			$hourlyFactor = $hourlyFactors[$currentHour];
		} else {
			$hourlyFactor = $defaultFactor;
		}
		return $hourlyFactor;
	}
	
	function getHourlyFactor3() {
		date_default_timezone_set('America/New_York');
		$currentHour = intval(date('g'));
		//var_dump('currentHour_buglog123:'.$currentHour);
		$hourlyFactors = array(
			1 => 1,
			2 => 2,
			3 => 3,
			6 => 4,
			7 => 5,
			8 => 6,
			9 => 9,
			10 => 3,
			11 => 9,
			12 => 8, 
		);
		$defaultFactor = 2;
		if (isset($hourlyFactors[$currentHour])) {
			$hourlyFactor = $hourlyFactors[$currentHour];
		} else {
			$hourlyFactor = $defaultFactor;
		}
		return $hourlyFactor;
	}

	public function show() 
	{
		global $LNG, $USER, $resource;

		$darkmatter_cost_trader	= Config::get()->darkmatter_cost_trader;

		$this->assign(array(
			'tr_cost_dm_trader'		=> sprintf($LNG['tr_cost_dm_trader'], pretty_number($darkmatter_cost_trader), $LNG['tech'][921]),
			'charge'				=> self::$Charge,
			'resource'				=> $resource,
			'requiredDarkMatter'	=> $USER['darkmatter'] < $darkmatter_cost_trader ? sprintf($LNG['tr_not_enought'], $LNG['tech'][921]) : false,
		));
		
		$this->display("page.trader.default.tpl");
	}
		
	function trade()
	{
		global $USER, $LNG;
		
		if ($USER['darkmatter'] < Config::get()->darkmatter_cost_trader) {
			$this->redirectTo('game.php?page=trader');
		}
		
		$resourceID	= HTTP::_GP('resource', 0);
		
		if(!in_array($resourceID, array_keys(self::$Charge))) {
			$this->printMessage($LNG['invalid_action'], array(array(
				'label'	=> $LNG['sys_back'],
				'url'	=> 'game.php?page=trader'
			)));
		}
		
		
		if ($resourceID	== "901")
			$tradeResources	= array_values(array_diff(array_keys(self::$Charge[$resourceID]), array($resourceID)));
		else if ($resourceID	== "902")
			$tradeResources	= array_values(array_diff(array_keys(self::$Charge[$resourceID]), array($resourceID,901,903)));
		else if ($resourceID	== "903")
			$tradeResources	= array_values(array_diff(array_keys(self::$Charge[$resourceID]), array($resourceID,901)));
		else if ($resourceID	== "921")
			$tradeResources	= array_values(array_diff(array_keys(self::$Charge[$resourceID]), array($resourceID,901,903)));
		else
			$tradeResources	= array_keys(self::$Charge[$resourceID]);
		
		
		//var_dump(self::$Charge[$resourceID]);

		
		$this->tplObj->loadscript("trader.js");
		$this->assign(array(
			'tradeResourceID'	=> $resourceID,
			'tradeResources'	=> $tradeResources,
			'charge' 			=> self::$Charge[$resourceID],
		));

		$this->display('page.trader.trade.tpl');
	}
	
	function send()
	{
		global $USER, $PLANET, $LNG, $resource;
		
		if ($USER['darkmatter'] < Config::get()->darkmatter_cost_trader) {
			$this->redirectTo('game.php?page=trader');
		}
		
		$resourceID	= HTTP::_GP('resource', 0);
		
		if(!in_array($resourceID, array_keys(self::$Charge))) {
			$this->printMessage($LNG['invalid_action'], array(array(
				'label'	=> $LNG['sys_back'],
				'url'	=> 'game.php?page=trader'
			)));
		}

		$getTradeResources	= HTTP::_GP('trade', array());
		
		$tradeResources		= array_values(array_diff(array_keys(self::$Charge[$resourceID]), array($resourceID)));
		$tradeSum 			= 0;
		
		foreach($tradeResources as $tradeRessID)
		{
			
			if(!isset($getTradeResources[$tradeRessID]))
			{
				continue;
			}
			$tradeAmount	= max(0, round((float) $getTradeResources[$tradeRessID]));
			
			if(empty($tradeAmount) || !isset(self::$Charge[$resourceID][$tradeRessID]))
			{
				continue;  
			}
			
			if(isset($PLANET[$resource[$resourceID]]))
			{
				$usedResources	= $tradeAmount * self::$Charge[$resourceID][$tradeRessID];
				
				
				if ($tradeRessID == 921)
					$TotalResources = $USER['darkmatter'];
				else
					$TotalResources = $PLANET[$resource[$tradeRessID]];
				
				if($getTradeResources[$tradeRessID] > $TotalResources)
				{
					$this->printMessage(sprintf($LNG['tr_not_enought'], $LNG['tech'][$tradeRessID]), array(array(
						'label'	=> $LNG['sys_back'],
						'url'	=> 'game.php?page=trader'
					)));
				}
				
				$tradeSum	  						-= $tradeAmount;
				$PLANET[$resource[$resourceID]]		+= $usedResources;
			}
			elseif(isset($USER[$resource[$resourceID]]))
			{
				if($resourceID == 921)
				{
					$USER[$resource[$resourceID]]	-= Config::get()->darkmatter_cost_trader;
				}
				
				$usedResources	= $tradeAmount * self::$Charge[$resourceID][$tradeRessID];
				
				if($usedResources > $USER[$resource[$resourceID]])
				{
					$this->printMessage(sprintf($LNG['tr_not_enought'], $LNG['tech'][$resourceID]), array(array(
						'label'	=> $LNG['sys_back'],
						'url'	=> 'game.php?page=trader'
					)));
				}
				
				$tradeSum	  						-= $tradeAmount;
				$USER[$resource[$resourceID]]		+= $usedResources;
				
				if($resourceID == 921)
				{
					$USER[$resource[$resourceID]]	+= Config::get()->darkmatter_cost_trader;
				}
			}
			else
			{
				throw new Exception('Unknown resource ID #'.$resourceID);
			}
			
			if(isset($PLANET[$resource[$tradeRessID]]))
			{
				$PLANET[$resource[$tradeRessID]]	-= $tradeAmount;
			}
			elseif(isset($USER[$resource[$tradeRessID]]))
			{
				$USER[$resource[$tradeRessID]]		-= $tradeAmount;
			}
			else
			{
				throw new Exception('Unknown resource ID #'.$tradeRessID);
			}
		}
		
		if ($tradeSum > 0)
		{
			$USER[$resource[921]]	-= Config::get()->darkmatter_cost_trader;
		}
		
		$this->printMessage($LNG['tr_exchange_done'], array(array(
			'label'	=> $LNG['sys_forward'],
			'url'	=> 'game.php?page=trader'
		)));
	}
}
