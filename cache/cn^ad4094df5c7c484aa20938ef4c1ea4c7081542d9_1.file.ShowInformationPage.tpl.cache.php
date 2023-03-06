<?php
/* Smarty version 3.1.30, created on 2022-12-13 04:51:13
  from "/app/styles/templates/adm/ShowInformationPage.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_639804c102c2d2_61638789',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'ad4094df5c7c484aa20938ef4c1ea4c7081542d9' => 
    array (
      0 => '/app/styles/templates/adm/ShowInformationPage.tpl',
      1 => 1566224315,
      2 => 'file',
    ),
    'a1072095f26593f338c911c8b3565b4999d7693f' => 
    array (
      0 => '/app/styles/templates/adm/overall_header.tpl',
      1 => 1566224315,
      2 => 'file',
    ),
    'd95ab47529883386bcef27a121e29b89539925f7' => 
    array (
      0 => '/app/styles/templates/adm/overall_footer.tpl',
      1 => 1566224315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:overall_header.tpl' => 1,
    'file:overall_footer.tpl' => 1,
  ),
),false)) {
function content_639804c102c2d2_61638789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '902315902639804c0eea373_66887175';
$_smarty_tpl->_subTemplateRender("file:overall_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'a1072095f26593f338c911c8b3565b4999d7693f', 'content_639804c0eef896_82045126');
?>


<table width="60%">
    <tr>
		<td><?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'info_information\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
</td>
    </tr>
    <tr>
		<td>
<pre class="left">```-- Server Info --
Server Infos: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'info\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

PHP-Version: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'vPHP\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
 (<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'vAPI\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
)
JSON Verfügbar: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'json\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

BCMath Verfügbar: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'bcmath\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

cURL Verfügbar: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'curl\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

SafeMode: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'safemode\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

MemoryLimit: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'memory\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

MySQL-Client-Version: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'vMySQLc\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

MySQL-Server-Version: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'vMySQLs\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

ErrorLog: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'errorlog\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
 (<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'errorloglines\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
, <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'log_errors\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
)
Timezone(PHP/CONF/USER): <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'php_tz\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
 / <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'conf_tz\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
 / <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'user_tz\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

Suhosin: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'suhosin\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

DB Version: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'dbVersion\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>


-- Game --
Game Version: 2Moons <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'vGame\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

Game Addresse: http://<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'root\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
/
Game Pfad: http://<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'gameroot\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
/index.php

Browser: <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'browser\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

```</pre>
		</td>
    </tr>
</table>
<?php
$_smarty_tpl->_subTemplateRender("file:overall_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, 'd95ab47529883386bcef27a121e29b89539925f7', 'content_639804c1019276_41607420');
?>

<?php }
/* Start inline template "/app/styles/templates/adm/ShowInformationPage.tpl" =============================*/
function content_639804c0eef896_82045126 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '902315902639804c0eea373_66887175';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'title\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)) {?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/admin/main.css?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/theme/gow/formate.css?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
, <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
, <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
, <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
, <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
, <?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
);
	var xsize 	= screen.width;
	var ysize 	= screen.height;
	var breite	= 720;
	var hoehe	= 300;
	var xpos	= (xsize-breite) / 2;
	var ypos	= (ysize-hoehe) / 2;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	function openEdit(id, type) {
		var editlist = window.open("?page=qeditor&edit="+type+"&id="+id, "edit", "scrollbars=yes,statusbar=no,toolbar=no,location=no,directories=no,resizable=no,menubar=no,width=850,height=600,screenX="+((xsize-600)/2)+",screenY="+((ysize-850)/2)+",top="+((ysize-600)/2)+",left="+((xsize-850)/2));
		editlist.focus();
	}
	<?php echo '</script'; ?>
> 
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:902315902639804c0eea373_66887175%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:902315902639804c0eea373_66887175%%*/';?>
">
	<div id="tooltip" class="tip"></div><?php
}
/* End inline template "/app/styles/templates/adm/ShowInformationPage.tpl" =============================*/
/* Start inline template "/app/styles/templates/adm/ShowInformationPage.tpl" =============================*/
function content_639804c1019276_41607420 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '902315902639804c0eea373_66887175';
if (isset($_GET['reload'])) {
if ($_GET['reload'] == 't') {
echo '<script'; ?>
 type="text/javascript">
parent.topFrame.document.location.reload();
<?php echo '</script'; ?>
>
<?php } elseif ($_GET['reload'] == 'l') {
echo '<script'; ?>
 type="text/javascript">
parent.rightFrame.document.location.reload();
<?php echo '</script'; ?>
>
<?php } elseif ($_GET['reload'] == 'r') {
echo '<script'; ?>
 type="text/javascript">
top.document.location.reload();
<?php echo '</script'; ?>
>
<?php }
}?>
</body>
</html><?php
}
/* End inline template "/app/styles/templates/adm/ShowInformationPage.tpl" =============================*/
}
