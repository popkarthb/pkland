<?php
/*疯狂大陆是一款多人在线的战略游戏。
 *游戏操作简捷,您仅需要使用浏览器就可以在任何时间任何地点进行游戏。
 *疯狂大陆遵循完全人与人的对抗和合作,作为一名将领您将与成千上万的玩家共处在一片疯狂而又无序的世界中。
 *你所关注的是如何发展自己...
 *疯狂大陆
 *Powered by pkland.lol 2022
 */

define('MODE', 'LOGIN');
define('ROOT_PATH', str_replace('\\', '/',dirname(__FILE__)).'/');
set_include_path(ROOT_PATH);

require 'includes/pages/login/AbstractLoginPage.class.php';
require 'includes/pages/login/ShowErrorPage.class.php';
require 'includes/common.php';
/** @var $LNG Language */

$page 		= HTTP::_GP('page', 'index');
$mode 		= HTTP::_GP('mode', 'show');
$page		= str_replace(array('_', '\\', '/', '.', "\0"), '', $page);
$pageClass	= 'Show'.ucfirst($page).'Page';

$path		= 'includes/pages/login/'.$pageClass.'.class.php';

if(!file_exists($path)) {
	ShowErrorPage::printError($LNG['page_doesnt_exist']);
}

// Added Autoload in feature Versions
require($path);

$pageObj	= new $pageClass;
// PHP 5.2 FIX
// can't use $pageObj::$requireModule
$pageProps	= get_class_vars(get_class($pageObj));

if(isset($pageProps['requireModule']) && $pageProps['requireModule'] !== 0 && !isModuleAvailable($pageProps['requireModule'])) {
	ShowErrorPage::printError($LNG['sys_module_inactive']);
}

if(!is_callable(array($pageObj, $mode))) {	
	if(!isset($pageProps['defaultController']) || !is_callable(array($pageObj, $pageProps['defaultController']))) {
		ShowErrorPage::printError($LNG['page_doesnt_exist']);
	}
	$mode	= $pageProps['defaultController'];
}

$pageObj->{$mode}();
