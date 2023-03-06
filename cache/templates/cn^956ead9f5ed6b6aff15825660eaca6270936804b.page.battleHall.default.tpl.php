<?php
/* Smarty version 3.1.30, created on 2022-12-13 04:52:10
  from "/app/styles/templates/login/page.battleHall.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_639804fa9c9d03_64303527',
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
  'cache_lifetime' => 604800,
),true)) {
function content_639804fa9c9d03_64303527 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty = $_smarty_tpl->smarty; if (!is_callable('smarty_function_html_options')) require_once '/app/includes/libs/Smarty/plugins/function.html_options.php';
?><!DOCTYPE html>
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
<body id="battleHall" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="page">

<header>
	<nav>
		<ul id="menu">
			<li><a href="index.php">首页</a></li>
			<li><a href="index.php?page=board" target="board">论坛</a></li>
			<li><a href="index.php?page=news">新闻</a></li>
			<li><a href="index.php?page=rules">规则</a></li>
			<li><a href="index.php?page=battleHall">战况</a></li>
			<li><a href="index.php?page=banList">监狱</a></li>
			<li><a href="index.php?page=disclamer">联系</a></li>
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
						<td class="box-inner-header-center"><h1>战况</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<?php if ($_smarty_tpl->tpl_vars['isMultiUniverse']->value) {?><p>
<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['universeSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value,'class'=>"changeUni",'id'=>"universe",'name'=>"universe"),$_smarty_tpl);?>

</p><?php }?>
<table>
<tr>
	<th style="color:lime">Place</th>
	<th style="color:lime">Users involved</th>
	<th style="color:lime">Date</th>
	<th style="color:lime">Units</th>
</tr>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hallList']->value, 'hallRow');
$_smarty_tpl->tpl_vars['hallRow']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['hallRow']->value) {
$_smarty_tpl->tpl_vars['hallRow']->iteration++;
$__foreach_hallRow_0_saved = $_smarty_tpl->tpl_vars['hallRow'];
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['hallRow']->iteration;?>
</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hallRow']->value['result'] == "a") {?>
	<span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['attacker'];?>
</span><span style="color:#FFFFFF"><b> VS </b></span><span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['defender'];?>
</span>
	<?php } elseif ($_smarty_tpl->tpl_vars['hallRow']->value['result'] == "r") {?>
	<span style="color:#FF0000"><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['attacker'];?>
</span><span style="color:#FFFFFF"><b> VS </b></span><span style="color:#00FF00"><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['defender'];?>
</span>
	<?php } else { ?>
	<?php echo $_smarty_tpl->tpl_vars['hallRow']->value['attacker'];?>
<b> VS </b><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['defender'];?>

	<?php }?>
	</td>
	<td><?php echo $_smarty_tpl->tpl_vars['hallRow']->value['time'];?>
</td>
	<td><?php echo pretty_number($_smarty_tpl->tpl_vars['hallRow']->value['units']);?>
</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['hallRow'] = $__foreach_hallRow_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<tr>
<td colspan="4"><p><b>Legend: </b><span style="color:#00FF00"><b>-Winner-</b></span><span style="color:#FF0000"><b>-Loser-</b></span></p></td>
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
