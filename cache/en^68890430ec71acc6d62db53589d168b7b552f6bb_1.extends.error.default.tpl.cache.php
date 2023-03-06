<?php
/* Smarty version 3.1.30, created on 2022-12-13 19:59:07
  from "/app/styles/templates/login/error.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6398d98bdbccd7_76103705',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '68890430ec71acc6d62db53589d168b7b552f6bb' => 
    array (
      0 => '/app/styles/templates/login/error.default.tpl',
      1 => 1566224315,
      2 => 'extends',
    ),
    '9bb87b7ed45a8be352174aea981e9a6f7fdf1aaa' => 
    array (
      0 => '/app/styles/templates/login/error.default.tpl',
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
    'file:error.default.tpl' => 1,
    'file:layout.normal.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_6398d98bdbccd7_76103705 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '13276782596398d98bd50cb1_45421300';
$_smarty_tpl->_subTemplateRender("file:error.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, '9bb87b7ed45a8be352174aea981e9a6f7fdf1aaa', 'content_6398d98bd55c58_25083581');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.normal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'be94e4e72d1ce870049bf99a77fa3cb9ac6af562', 'content_6398d98bd71926_43816711');
}
/* Start inline template "extends:error.default.tpl" =============================*/
function content_6398d98bd55c58_25083581 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13276782596398d98bd50cb1_45421300';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3172399216398d98bd5c998_24255529', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15357921646398d98bd6ffe6_39440621', "content");
}
/* {block "title"} */
class Block_3172399216398d98bd5c998_24255529 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_15357921646398d98bd6ffe6_39440621 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['13276782596398d98bd50cb1_45421300'] = true;
?>

<table class="table519">
	<tr>
		<td><p><?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'message\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
</p><?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'redirectButtons\']->value)) {?>/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
<p><?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'redirectButtons\']->value, \'button\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'button\']->value) {
?>/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
<a href="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'button\']->value[\'url\'];?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
"><button><?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'button\']->value[\'label\'];?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
</button></a><?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
</p><?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php }?>/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
</td>
	</tr>
</table>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:error.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
function content_6398d98bd73b34_68928767 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13276782596398d98bd50cb1_45421300';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title>疯狂大陆 - pkland.lol - 网页游戏</title>
	<meta name="generator" content="pkland <?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
">
	<meta name="keywords" content="疯狂大陆, pkland, Browsergame">
	<meta name="description" content="pkland Browsergame powerd by pkland.lol"> 
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="scripts/base/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8495023096398d98bd89353_05032077', "script");
?>
	
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
">
	<div id="page">
<?php
}
/* {block "script"} */
class Block_8495023096398d98bd89353_05032077 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
function content_6398d98bd94721_74205572 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '13276782596398d98bd50cb1_45421300';
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
		<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value) > 1) {?>/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'languages\']->value, \'langName\', false, \'langKey\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'langKey\']->value => $_smarty_tpl->tpl_vars[\'langName\']->value) {
?>/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>

		
		<li><a href="?lang=<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
" title="<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
"><?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>
</span></a></li>
		
		<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php }?>/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';?>

	</nav>
</header>
<?php
}
/* End inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
/* Start inline template "extends:error.default.tpl" =============================*/
function content_6398d98bd71926_43816711 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '13276782596398d98bd50cb1_45421300';
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '78e23b7c67061423c8f18765934ee70e904f4292', 'content_6398d98bd73b34_68928767');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '4f71a8bb5716be7638d10aaf81651aed6afa04da', 'content_6398d98bd94721_74205572');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20005400776398d98bdb5015_62850935', 'title');
?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7130063496398d98bdb8769_18337902', 'content');
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
<?php echo '/*%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:13276782596398d98bd50cb1_45421300%%*/';
}
/* {block 'title'} */
class Block_20005400776398d98bdb5015_62850935 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_7130063496398d98bdb8769_18337902 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* End inline template "extends:error.default.tpl" =============================*/
}
