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
 

class ShowShipyardPage extends AbstractGamePage
{
	public static $requireModule = 0;
	
	public static $defaultController = 'show';

	function __construct() 
	{
		parent::__construct();
	}
	
	private function CancelAuftr() 
	{
		global $USER, $PLANET, $resource;
		$ElementQueue = unserialize($PLANET['b_hangar_id']);
		
		$CancelArray	= HTTP::_GP('auftr', array());
		
		if(!is_array($CancelArray))
		{
			return false;
		}	
		
		foreach ($CancelArray as $Auftr)
		{
			if(!isset($ElementQueue[$Auftr])) {
				continue;
			}
			
			if($Auftr == 0) {
				$PLANET['b_hangar']	= 0;
			}
			
			$Element		= $ElementQueue[$Auftr][0];
			$Count			= $ElementQueue[$Auftr][1];
			
			$costResources	= BuildFunctions::getElementPrice($USER, $PLANET, $Element, false, $Count);
		
			if(isset($costResources[901])) { $PLANET[$resource[901]]	+= $costResources[901] * FACTOR_CANCEL_SHIPYARD; }
			if(isset($costResources[902])) { $PLANET[$resource[902]]	+= $costResources[902] * FACTOR_CANCEL_SHIPYARD; }
			if(isset($costResources[903])) { $PLANET[$resource[903]]	+= $costResources[903] * FACTOR_CANCEL_SHIPYARD; }
			if(isset($costResources[921])) { $USER[$resource[921]]		+= $costResources[921] * FACTOR_CANCEL_SHIPYARD; }
			
			unset($ElementQueue[$Auftr]);
		}
		
		if(empty($ElementQueue)) {
			$PLANET['b_hangar_id']	= '';
		} else {
			$PLANET['b_hangar_id']	= serialize(array_values($ElementQueue));
		}

		return true;
	}
	
	private function BuildAuftr($fmenge)
	{
		global $USER, $PLANET, $reslist, $resource;
		
		$Missiles	= array(
			502	=> $PLANET[$resource[502]],
			503	=> $PLANET[$resource[503]],
		);

		foreach($fmenge as $Element => $Count)
		{
			if(empty($Count)
				|| !in_array($Element, array_merge($reslist['fleet'], $reslist['defense'], $reslist['missile']))
				|| !BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element)
			) {
				continue;
			}
			
			$MaxElements 	= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element);
			$Count			= is_numeric($Count) ? round($Count) : 0;
			$Count 			= max(min($Count, Config::get()->max_fleet_per_build), 0);
			$Count 			= min($Count, $MaxElements);
			
			$BuildArray    	= !empty($PLANET['b_hangar_id']) ? unserialize($PLANET['b_hangar_id']) : array();
			if (in_array($Element, $reslist['missile']))
			{
				$MaxMissiles		= BuildFunctions::getMaxConstructibleRockets($USER, $PLANET, $Missiles);
				$Count 				= min($Count, $MaxMissiles[$Element]);

				$Missiles[$Element] += $Count;
			} elseif(in_array($Element, $reslist['one'])) {
				$InBuild	= false;
				foreach($BuildArray as $ElementArray) {
					if($ElementArray[0] == $Element) {
						$InBuild	= true;
						break;
					}
				}
				
				if ($InBuild)
					continue;

				if($Count != 0 && $PLANET[$resource[$Element]] == 0 && $InBuild === false)
					$Count =  1;
			}

			if(empty($Count))
				continue;
			
			$costResources	= BuildFunctions::getElementPrice($USER, $PLANET, $Element, false, $Count);
	
			if(isset($costResources[901])) { $PLANET[$resource[901]]	-= $costResources[901]; }
			if(isset($costResources[902])) { $PLANET[$resource[902]]	-= $costResources[902]; }
			if(isset($costResources[903])) { $PLANET[$resource[903]]	-= $costResources[903]; }
			if(isset($costResources[921])) { $USER[$resource[921]]		-= $costResources[921]; }
			
			$BuildArray[]			= array($Element, $Count);
			$PLANET['b_hangar_id']	= serialize($BuildArray);
		}
	}
	
	public function show()
	{
		global $USER, $PLANET, $LNG, $resource, $reslist;
		
		if ($PLANET[$resource[21]] == 0)
		{
			$this->printMessage($LNG['bd_shipyard_required']);
		}


		$buildTodo	= HTTP::_GP('fmenge', array());
		$action		= HTTP::_GP('action', '');
								
		$NotBuilding = true;
		if (!empty($PLANET['b_building_id']))
		{
			$CurrentQueue 	= unserialize($PLANET['b_building_id']);
			foreach($CurrentQueue as $ElementArray)
			{
				if($ElementArray[0] == 21 || $ElementArray[0] == 14 || $ElementArray[0] == 41 || $ElementArray[0] == 42 || $ElementArray[0] == 43) {
					$NotBuilding = false;
					break;
				}
			}
		}
		
		$ElementQueue 	= unserialize($PLANET['b_hangar_id']);
		if(empty($ElementQueue))
			$Count	= 0;
		else
			$Count	= count($ElementQueue);
			
		if($USER['urlaubs_modus'] == 0 && $NotBuilding == true)
		{
			if (!empty($buildTodo))
			{
				$maxBuildQueue	= Config::get()->max_elements_ships;
				if ($maxBuildQueue != 0 && $Count >= $maxBuildQueue)
				{
					$this->printMessage(sprintf($LNG['bd_max_builds'], $maxBuildQueue));
				}

				$this->BuildAuftr($buildTodo);
			}
					
			if ($action == "delete")
			{
				$this->CancelAuftr();
			}
		}
		
		$elementInQueue	= array();
		$ElementQueue 	= unserialize($PLANET['b_hangar_id']);
		$buildList		= array();
		$elementList	= array();

		if(!empty($ElementQueue))
		{
			$Shipyard		= array();
			$QueueTime		= 0;
			foreach($ElementQueue as $Element)
			{
				if (empty($Element))
					continue;
					
				$elementInQueue[$Element[0]]	= true;
				$ElementTime  	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element[0]);
				$QueueTime   	+= $ElementTime * $Element[1];
				$Shipyard[]		= array($LNG['tech'][$Element[0]], $Element[1], $ElementTime, $Element[0]);		
			}

			$buildList	= array(
				'Queue' 				=> $Shipyard,
				'b_hangar_id_plus' 		=> $PLANET['b_hangar'],
				'pretty_time_b_hangar' 	=> pretty_time(max($QueueTime - $PLANET['b_hangar'],0)),
			);
		}
		
		
		$mode		= HTTP::_GP('mode', 'fleet');
		
		if($mode == 'defense') {
			$elementIDs	= array_merge($reslist['defense'], $reslist['missile']);
		} else {
			$elementIDs	= $reslist['fleet'];
		}
		
		$Missiles	= array();
		
		foreach($reslist['missile'] as $elementID)
		{
			$Missiles[$elementID]	= $PLANET[$resource[$elementID]];
		}
		
		$MaxMissiles	= BuildFunctions::getMaxConstructibleRockets($USER, $PLANET, $Missiles);
		
		foreach($elementIDs as $Element)
		{
			if(!BuildFunctions::isTechnologieAccessible($USER, $PLANET, $Element))
				continue;
			
			$costResources		= BuildFunctions::getElementPrice($USER, $PLANET, $Element);
			$costOverflow		= BuildFunctions::getRestPrice($USER, $PLANET, $Element, $costResources);
			$elementTime    	= BuildFunctions::getBuildingTime($USER, $PLANET, $Element, $costResources);
			$buyable			= BuildFunctions::isElementBuyable($USER, $PLANET, $Element, $costResources);
			$maxBuildable		= BuildFunctions::getMaxConstructibleElements($USER, $PLANET, $Element, $costResources);

			if(isset($MaxMissiles[$Element])) {
				$maxBuildable	= min($maxBuildable, $MaxMissiles[$Element]);
			}
			
			$AlreadyBuild		= in_array($Element, $reslist['one']) && (isset($elementInQueue[$Element]) || $PLANET[$resource[$Element]] != 0);
			
			$elementList[$Element]	= array(
				'id'				=> $Element,
				'available'			=> $PLANET[$resource[$Element]],
				'costResources'		=> $costResources,
				'costOverflow'		=> $costOverflow,
				'elementTime'    	=> $elementTime,
				'buyable'			=> $buyable,
				'maxBuildable'		=> floatToString($maxBuildable),
				'AlreadyBuild'		=> $AlreadyBuild,
			);
		}
		
		$this->assign(array(
			'elementList'	=> $elementList,
			'NotBuilding'	=> $NotBuilding,
			'BuildList'		=> $buildList,
			'maxlength'		=> strlen(Config::get()->max_fleet_per_build),
			'mode'			=> $mode,
		));

		$this->display('page.shipyard.default.tpl');
	}
}
