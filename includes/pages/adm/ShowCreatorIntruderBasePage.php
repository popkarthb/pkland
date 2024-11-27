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

if (!allowedTo(str_replace(array(dirname(__FILE__), '\\', '/', '.php'), '', __FILE__))) throw new Exception("Permission error!");

function ShowCreatorIntruderBasePage()
{
	global $LNG;

	$config = Config::get(Universe::getEmulated());

	if ($_POST)
	{
		$intruder_count			= HTTP::_GP('intruder_count', 1);

        $sql = <<<sql
INSERT INTO `pkland`.`uni1_planets` (
	`name`,
	`id_owner`,
	`universe`,
	`galaxy`,
	`system`,
	`planet`,
	`last_update`,
	`planet_type`,
	`destruyed`,
	`b_building`,
	`b_building_id`,
	`b_hangar`,
	`b_hangar_id`,
	`b_hangar_plus`,
	`image`,
	`diameter`,
	`field_current`,
	`field_max`,
	`temp_min`,
	`temp_max`,
	`eco_hash`,
	`metal`,
	`metal_perhour`,
	`metal_max`,
	`crystal`,
	`crystal_perhour`,
	`crystal_max`,
	`deuterium`,
	`deuterium_perhour`,
	`deuterium_max`,
	`energy_used`,
	`energy`,
	`metal_mine`,
	`crystal_mine`,
	`deuterium_sintetizer`,
	`solar_plant`,
	`fusion_plant`,
	`robot_factory`,
	`nano_factory`,
	`hangar`,
	`metal_store`,
	`crystal_store`,
	`deuterium_store`,
	`laboratory`,
	`terraformer`,
	`university`,
	`ally_deposit`,
	`silo`,
	`mondbasis`,
	`phalanx`,
	`sprungtor`,
	`small_ship_cargo`,
	`big_ship_cargo`,
	`light_hunter`,
	`heavy_hunter`,
	`crusher`,
	`battle_ship`,
	`colonizer`,
	`recycler`,
	`spy_sonde`,
	`bomber_ship`,
	`solar_satelit`,
	`destructor`,
	`dearth_star`,
	`battleship`,
	`lune_noir`,
	`ev_transporter`,
	`star_crasher`,
	`giga_recykler`,
	`dm_ship`,
	`orbital_station`,
	`misil_launcher`,
	`small_laser`,
	`big_laser`,
	`gauss_canyon`,
	`ionic_canyon`,
	`buster_canyon`,
	`small_protection_shield`,
	`planet_protector`,
	`big_protection_shield`,
	`graviton_canyon`,
	`interceptor_misil`,
	`interplanetary_misil`,
	`metal_mine_porcent`,
	`crystal_mine_porcent`,
	`deuterium_sintetizer_porcent`,
	`solar_plant_porcent`,
	`fusion_plant_porcent`,
	`solar_satelit_porcent`,
	`last_jump_time`,
	`der_metal`,
	`der_crystal`,
	`id_luna` 
)
VALUES
	(
		'入侵者基地', -- name
		0, -- id_owner
		1, -- universe
		ROUND(RAND() * 9), -- galaxy
		ROUND(RAND() * 500), -- system
		ROUND(RAND() * 15), -- planet
		1696911768, -- last_update
		'1', -- planet_type
		0, -- destruyed
		0, -- b_building
		'', -- b_building_id
		0, -- b_hangar
		'', -- b_hangar_id
		0, -- b_hangar_plus
		'botImage',  -- image
		12767, -- diameter
		258, -- field_current
		1000,-- field_max
		111, -- temp_min
		151, -- temp_max
		'ad0b21f85a27074ca4b59e7475116c11', -- eco_hash
		 ROUND(RAND() * 1000000), -- metal
		0, -- metal_perhour
		0, -- metal_max
		 ROUND(RAND() * 1000000), -- crystal
		0, -- crystal_perhour
		0, -- crystal_max
		ROUND(RAND() * 1000000), -- deuterium
		0,  -- deuterium_perhour
		0, -- deuterium_max
		- 34906, -- energy_used
		1933913, -- energy
		34, -- metal_mine
		31, -- crystal_mine
		32, -- deuterium_sintetizer
		20, -- solar_plant
		13, -- fusion_plant
		15, -- robot_factory
		6, -- nano_factory
		16, -- hangar
		15, -- metal_store
		15, -- crystal_store
		15, -- deuterium_store
		15, -- laboratory
		0, -- terraformer
		0, -- university
		5, -- ally_deposit
		5, -- silo
		0, -- mondbasis
		0, -- phalanx
		0, -- sprungtor
		0, -- small_ship_cargo
		1, -- big_ship_cargo
		35269, -- light_hunter
		0, -- heavy_hunter
		0, -- crusher
		2465, -- battle_ship
		0, -- colonizer
		0, -- recycler
		0, -- spy_sonde
		0, -- bomber_ship
		37212, -- solar_satelit
		0, -- destructor
		0, -- dearth_star
		0, -- battleship
		0, -- lune_noir
		0, -- ev_transporter
		0, -- star_crasher
		0, -- giga_recykler
		0, -- dm_ship
		0, -- orbital_station
		0, -- misil_launcher
		1048, -- small_laser
		1378, -- big_laser
		1042, -- gauss_canyon
		927, -- ionic_canyon
		717, -- buster_canyon
		0, -- small_protection_shield
		0,  -- planet_protector
		0, -- big_protection_shield
		0, -- graviton_canyon
		0, -- interceptor_misil
		1, -- interplanetary_misil
		'10', -- metal_mine_porcent
		'10', -- crystal_mine_porcent
		'10', -- deuterium_sintetizer_porcent
		'10', -- solar_plant_porcent
		'10', -- fusion_plant_porcent
		'10', -- solar_satelit_porcent
		0, -- last_jump_time
		427348800, -- der_metal
		309657600, -- der_crystal
	0  -- id_luna
	);
sql;

        Database::get()->nativeQuery($sql);

	}
	
	$template	= new template();


	$template->assign_vars(array(

		'ib_create_intruder_count'		=> $LNG['ib_create_intruder_count'],
		'ib_title'							=> $LNG['ib_title'],
		'ib_create'					=> $LNG['ib_create'],
	));
		
	$template->show('IntruderBasePage.tpl');
}