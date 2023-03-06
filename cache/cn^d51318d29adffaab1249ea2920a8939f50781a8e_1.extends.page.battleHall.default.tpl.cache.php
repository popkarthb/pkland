<?php
/* Smarty version 3.1.30, created on 2022-12-13 04:52:10
  from "/app/styles/templates/login/page.battleHall.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_639804fa9c3cc5_63944828',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'd51318d29adffaab1249ea2920a8939f50781a8e' => 
    array (
      0 => '/app/styles/templates/login/page.battleHall.default.tpl',
      1 => 1566224315,
      2 => 'extends',
    ),
    'a6682e80ba1d73e3978ae2f88d368efb1f2b8b51' => 
    array (
      0 => '/app/styles/templates/login/page.battleHall.default.tpl',
      1 => 1566224315,
      2 => 'file',
    ),
    'be94e4e72d1ce870049bf99a77fa3cb9ac6af562' => 
    array (
      0 => '/app/styles/templates/login/layout.normal.tpl',
      1 => 1566224315,
      2 => 'file',
    ),
    '78e23b7c67061423c8f18765934ee70e904f4292' => 
    array (
      0 => '/app/styles/templates/login/main.header.tpl',
      1 => 1670905726,
      2 => 'file',
    ),
    '4f71a8bb5716be7638d10aaf81651aed6afa04da' => 
    array (
      0 => '/app/styles/templates/login/main.navigation.tpl',
      1 => 1670906462,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page.battleHall.default.tpl' => 1,
    'file:layout.normal.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_639804fa9c3cc5_63944828 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '1960910830639804fa92e308_38728411';
$_smarty_tpl->_subTemplateRender("file:page.battleHall.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'a6682e80ba1d73e3978ae2f88d368efb1f2b8b51', 'content_639804fa933408_71658919');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.normal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'be94e4e72d1ce870049bf99a77fa3cb9ac6af562', 'content_639804fa97a5c4_29422260');
}
/* Start inline template "extends:page.battleHall.default.tpl" =============================*/
function content_639804fa933408_71658919 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1960910830639804fa92e308_38728411';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_814403841639804fa93a305_34838490', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115327075639804fa978239_88335223', "content");
}
/* {block "title"} */
class Block_814403841639804fa93a305_34838490 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleBattleHall'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_115327075639804fa978239_88335223 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['1960910830639804fa92e308_38728411'] = true;
?>

<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php if ($_smarty_tpl->tpl_vars[\'isMultiUniverse\']->value) {?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
<p>
<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'universeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'UNI\']->value,\'class\'=>"changeUni",\'id\'=>"universe",\'name\'=>"universe"),$_smarty_tpl);?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

</p><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php }?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

<table>
<tr>
	<th style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_platz'];?>
</th>
	<th style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_owners'];?>
</th>
	<th style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_datum'];?>
</th>
	<th style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_units'];?>
</th>
</tr>
<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'hallList\']->value, \'hallRow\');
$_smarty_tpl->tpl_vars[\'hallRow\']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'hallRow\']->value) {
$_smarty_tpl->tpl_vars[\'hallRow\']->iteration++;
$__foreach_hallRow_0_saved = $_smarty_tpl->tpl_vars[\'hallRow\'];
?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

<tr>
	<td><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'hallRow\']->iteration;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
</td>
	<td>
	<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php if ($_smarty_tpl->tpl_vars[\'hallRow\']->value[\'result\'] == "a") {?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

	<span style="color:#00FF00"><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'hallRow\']->value[\'attacker\'];?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
</span><span style="color:#FFFFFF"><b> VS </b></span><span style="color:#FF0000"><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'hallRow\']->value[\'defender\'];?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
</span>
	<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'hallRow\']->value[\'result\'] == "r") {?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

	<span style="color:#FF0000"><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'hallRow\']->value[\'attacker\'];?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
</span><span style="color:#FFFFFF"><b> VS </b></span><span style="color:#00FF00"><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'hallRow\']->value[\'defender\'];?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
</span>
	<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php } else { ?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

	<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'hallRow\']->value[\'attacker\'];?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
<b> VS </b><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'hallRow\']->value[\'defender\'];?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

	<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php }?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

	</td>
	<td><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'hallRow\']->value[\'time\'];?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
</td>
	<td><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'hallRow\']->value[\'units\']);?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
</td>
</tr>
<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php
$_smarty_tpl->tpl_vars[\'hallRow\'] = $__foreach_hallRow_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

<tr>
<td colspan="4"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_legende'];?>
<span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_gewinner'];?>
</span><span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tkb_verlierer'];?>
</span></p></td>
</tr>
</table>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:page.battleHall.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
function content_639804fa97c795_06476347 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1960910830639804fa92e308_38728411';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title>疯狂大陆 - pkland.lol - 网页游戏</title>
	<meta name="generator" content="pkland <?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
">
	<meta name="keywords" content="疯狂大陆, pkland, Browsergame">
	<meta name="description" content="pkland Browsergame powerd by pkland.lol"> 
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="scripts/base/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/login/main.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
><?php if (isset($_smarty_tpl->tpl_vars['code']->value)) {?>var loginError = <?php echo json_encode($_smarty_tpl->tpl_vars['code']->value);?>
;<?php }
echo '</script'; ?>
>
	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1251891537639804fa991410_54753646', "script");
?>
	
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
">
	<div id="page">
<?php
}
/* {block "script"} */
class Block_1251891537639804fa991410_54753646 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
function content_639804fa99c539_19981680 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1960910830639804fa92e308_38728411';
?>
<header>
	<nav>
		<ul id="menu">
			<li><a href="index.php"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_index'];?>
</a></li>
			<li><a href="index.php?page=board" target="board"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['forum'];?>
</a></li>
			<li><a href="index.php?page=news"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_news'];?>
</a></li>
			<li><a href="index.php?page=rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_rules'];?>
</a></li>
			<li><a href="index.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_battlehall'];?>
</a></li>
			<li><a href="index.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_banlist'];?>
</a></li>
			<li><a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a></li>
		</ul>
	</nav>
	<nav>
		<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value) > 1) {?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'languages\']->value, \'langName\', false, \'langKey\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'langKey\']->value => $_smarty_tpl->tpl_vars[\'langName\']->value) {
?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

		
		<li><a href="?lang=<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
" title="<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
"><?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>
</span></a></li>
		
		<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php }?>/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';?>

	</nav>
</header>
<?php
}
/* End inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
/* Start inline template "extends:page.battleHall.default.tpl" =============================*/
function content_639804fa97a5c4_29422260 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '1960910830639804fa92e308_38728411';
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '78e23b7c67061423c8f18765934ee70e904f4292', 'content_639804fa97c795_06476347');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '4f71a8bb5716be7638d10aaf81651aed6afa04da', 'content_639804fa99c539_19981680');
?>

<div id="content">
<section>
	<table class="box-out">
		<tr class="box-out-header">
			<td class="box-out-header-left"></td>
			<td class="box-out-header-center"></td>
			<td class="box-out-header-right"></td>
		</tr>
		<tr class="box-out-content">
			<td class="box-out-content-left"></td>
			<td class="box-out-content-center">
				<table class="box-inner">
					<tr class="box-inner-header">
						<td class="box-inner-header-left"></td>
						<td class="box-inner-header-center"><h1><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_671066017639804fa9bc423_40826532', 'title');
?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1278212839639804fa9bf854_65047103', 'content');
?>
</td>
						<td class="box-inner-content-right"></td>
					</tr>
					<tr class="box-inner-footer">
						<td class="box-inner-footer-left"></td>
						<td class="box-inner-footer-center"></td>
						<td class="box-inner-footer-right"></td>
					</tr>
				</table>					
			</td>
			<td class="box-out-content-right"></td>
		</tr>
		<tr class="box-out-footer">
			<td class="box-out-footer-left"></td>
			<td class="box-out-footer-center"></td>
			<td class="box-out-footer-right"></td>
		</tr>
	</table>
</section>
</div>
<?php echo '/*%%SmartyNocache:1960910830639804fa92e308_38728411%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:1960910830639804fa92e308_38728411%%*/';
}
/* {block 'title'} */
class Block_671066017639804fa9bc423_40826532 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_1278212839639804fa9bf854_65047103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* End inline template "extends:page.battleHall.default.tpl" =============================*/
}
