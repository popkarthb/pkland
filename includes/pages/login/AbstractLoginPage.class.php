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

abstract class AbstractLoginPage
{

	/**
	 * reference of the template object
	 * @var template
	 */
	protected $tplObj = null;
	protected $window;
	public $defaultWindow = 'normal';
	
	protected function __construct() {
		
		if(!AJAX_REQUEST)
		{
			$this->setWindow($this->defaultWindow);
			$this->initTemplate();
		} else {
			$this->setWindow('ajax');
		}
	}

	protected function getUniverseSelector()
	{
		$universeSelect	= array();
		foreach(Universe::availableUniverses() as $uniId)
		{
			$universeSelect[$uniId]	= Config::get($uniId)->uni_name;
		}

		return $universeSelect;
	}

	protected function initTemplate()
	{
		if(isset($this->tplObj))
			return true;
			
		$this->tplObj	= new template;
		list($tplDir)	= $this->tplObj->getTemplateDir();
		$this->tplObj->setTemplateDir($tplDir.'login/');
		return true;
	}
	
	protected function setWindow($window) {
		$this->window	= $window;
	}
		
	protected function getWindow() {
		return $this->window;
	}
	
	protected function getQueryString() {
		$queryString	= array();
		$page			= HTTP::_GP('page', '');
		
		if(!empty($page)) {
			$queryString['page']	= $page;
		}
		
		$mode			= HTTP::_GP('mode', '');
		if(!empty($mode)) {
			$queryString['mode']	= $mode;
		}
		
		return http_build_query($queryString);
	}
	
	protected function getPageData() 
    {		
		global $LNG;

		$config	= Config::get();

        $this->tplObj->assign_vars(array(
			'recaptchaEnable'		=> $config->capaktiv,
			'recaptchaPublicKey'	=> $config->cappublic,
			'gameName' 				=> $config->game_name,
			'facebookEnable'		=> $config->fb_on,
			'fb_key' 				=> $config->fb_apikey,
			'mailEnable'			=> $config->mail_active,
			'reg_close'				=> $config->reg_closed,
			'referralEnable'		=> $config->ref_active,
			'analyticsEnable'		=> $config->ga_active,
			'analyticsUID'			=> $config->ga_key,
			'lang'					=> $LNG->getLanguage(),
			'UNI'					=> Universe::current(),
			'VERSION'				=> $config->VERSION,
			'REV'					=> substr($config->VERSION, -4),
			'languages'				=> Language::getAllowedLangs(false),
		));
	}
	
	protected function printMessage($message, $redirectButtons = null, $redirect = null, $fullSide = true)
	{
		$this->assign(array(
			'message'			=> $message,
			'redirectButtons'	=> $redirectButtons,
		));
		
		if(isset($redirect)) {
			$this->tplObj->gotoside($redirect[0], $redirect[1]);
		}
		
		if(!$fullSide) {
			$this->setWindow('popup');
		}
		
		$this->display('error.default.tpl');
	}
	
	protected function save() {
		
	}

	protected function assign($array, $nocache = true) {
		$this->tplObj->assign_vars($array, $nocache);
	}
	
	protected function display($file) {
		global $LNG;
		
		$this->save();
		
		if($this->getWindow() !== 'ajax') {
			$this->getPageData();
		}

		if (UNIS_WILDCAST) {
			$hostParts = explode('.', HTTP_HOST);
			if (preg_match('/uni[0-9]+/', $hostParts[0])) {
				array_shift($hostParts);
			}
			$host = implode('.', $hostParts);
			$basePath = PROTOCOL.$host.HTTP_BASE;
		} else {
			$basePath = PROTOCOL.HTTP_HOST.HTTP_BASE;
		}
		
		$this->assign(array(
            'lang'    			=> $LNG->getLanguage(),
			'bodyclass'			=> $this->getWindow(),
			'basepath'			=> $basePath,
			'isMultiUniverse'	=> count(Universe::availableUniverses()) > 1,
			'unisWildcast'		=> UNIS_WILDCAST,
		));

		$this->assign(array(
			'LNG'			=> $LNG,
		), false);
		
		$this->tplObj->display('extends:layout.'.$this->getWindow().'.tpl|'.$file);
		exit;
	}
	
	protected function sendJSON($data) {
		$this->save();
		echo json_encode($data);
		exit;
	}
	
	protected function redirectTo($url) {
		$this->save();
		HTTP::redirectTo($url);
		exit;
	}
	
	protected function redirectPost($url, $postFields) {
		$this->save();
		$this->assign(array(
            'url'    		=> $url,
			'postFields'	=> $postFields,
		));
		
		$this->display('info.redirectPost.tpl');
	}
}