<?php
/* Smarty version 3.1.30, created on 2022-12-13 19:59:07
  from "/app/styles/templates/login/error.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6398d98bdc2551_38171138',
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
  'cache_lifetime' => 604800,
),true)) {
function content_6398d98bdc2551_38171138 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title>疯狂大陆 - pkland.lol - 网页游戏</title>
	<meta name="generator" content="pkland <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<meta name="keywords" content="疯狂大陆, pkland, Browsergame">
	<meta name="description" content="pkland Browsergame powerd by pkland.lol"> 
	<!--[if lt IE 9]>
	<script src="scripts/base/html5.js"></script>
	<![endif]-->
	<script src="scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script src="scripts/login/main.js"></script>
	<script></script>
		
</head>
<body id="register'[0]" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="page">

<header>
	<nav>
		<ul id="menu">
			<li><a href="index.php">Index</a></li>
			<li><a href="index.php?page=board" target="board">Forum</a></li>
			<li><a href="index.php?page=news">News</a></li>
			<li><a href="index.php?page=rules">Rules</a></li>
			<li><a href="index.php?page=battleHall">Battle Hall</a></li>
			<li><a href="index.php?page=banList">Banned Hall</a></li>
			<li><a href="index.php?page=disclamer">Contacts</a></li>
		</ul>
	</nav>
	<nav>
		<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
		<ul id="language">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'langName', false, 'langKey');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['langKey']->value => $_smarty_tpl->tpl_vars['langName']->value) {
?>
		
		<li><a href="?lang=<?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
" rel="alternate" hreflang="<?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['langName']->value;?>
"><span class="flags <?php echo $_smarty_tpl->tpl_vars['langKey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['langName']->value;?>
</span></a></li>
		
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</ul>
		<?php }?>
	</nav>
</header>

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
						<td class="box-inner-header-center"><h1>Info</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<table class="table519">
	<tr>
		<td><p><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</p><?php if (!empty($_smarty_tpl->tpl_vars['redirectButtons']->value)) {?><p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['redirectButtons']->value, 'button');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
?><a href="<?php echo $_smarty_tpl->tpl_vars['button']->value['url'];?>
"><button><?php echo $_smarty_tpl->tpl_vars['button']->value['label'];?>
</button></a><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</p><?php }?></td>
	</tr>
</table>
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
<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
