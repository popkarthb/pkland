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

function ShowSpeedUpPage()
{
	global $LNG;

	$config = Config::get(Universe::getEmulated());

	if ($_POST)
	{
        $config_before = array(
            'speed_up_seconds' 	=> $config->speed_up_seconds,
        );

		$speed_up_seconds				= HTTP::_GP('speed_up_seconds', 60);



		
		$config_after = array(
			'speed_up_seconds'		=> $speed_up_seconds,
		);

		foreach($config_after as $key => $value)
		{
			$config->$key	= $value;
		}
		$config->save();
		
		$LOG = new Log(3);
		$LOG->target = 5;
		$LOG->old = $config_before;
		$LOG->new = $config_after;
		$LOG->save();
	}
	
	$template	= new template();


	$template->assign_vars(array(

		'su_second'		=> $LNG['su_second'],
		'su_title'							=> $LNG['su_title'],
		'cs_save_changes'					=> $LNG['cs_save_changes'],
		'su_default_value'					=> $config->speed_up_seconds,
		'su_unit'					=> $LNG['su_unit'],
	));
		
	$template->show('SpeedUpPage.tpl');
}