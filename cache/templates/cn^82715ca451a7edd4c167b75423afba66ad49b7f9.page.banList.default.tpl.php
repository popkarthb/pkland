<?php
/* Smarty version 3.1.30, created on 2022-12-13 04:52:11
  from "/app/styles/templates/login/page.banList.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_639804fb93d995_52976837',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'f01cf7fc6facba9fffade3f1ed0f1cf9fbbc61e7' => 
    array (
      0 => '/app/styles/templates/login/page.banList.default.tpl',
      1 => 1566224315,
      2 => 'extends',
    ),
    'd4f874bddbaa7b6fecc372ba2dfa707942377596' => 
    array (
      0 => '/app/styles/templates/login/page.banList.default.tpl',
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
function content_639804fb93d995_52976837 (Smarty_Internal_Template $_smarty_tpl) {
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
<body id="banList" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
						<td class="box-inner-header-center"><h1>监狱</h1></td>
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
		<th colspan="5">List of banned players</th>
	</tr>
<?php if ($_smarty_tpl->tpl_vars['banCount']->value) {?>
	<tr>
		<td style="text-align:right;" colspan="5"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?><a href="index.php?page=banList&amp;side=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">&laquo;</a>&nbsp;<?php }
$_smarty_tpl->tpl_vars['site'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int) ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0) {
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++) {
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="index.php?page=banList&amp;side=<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['site']->value == $_smarty_tpl->tpl_vars['page']->value) {?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php } else { ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value != $_smarty_tpl->tpl_vars['maxPage']->value) {?>&nbsp;<?php }
}
}
if ($_smarty_tpl->tpl_vars['page']->value != $_smarty_tpl->tpl_vars['maxPage']->value) {?>&nbsp;<a href="index.php?page=banList&amp;side=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">&raquo;</a><?php }?></td>
	</tr>
<?php }?>
	<tr>
		<td>From</td>
		<td>Until</td>
		<td>Player</td>
		<td>By</td>
		<td>Reason</td>
	</tr>
<?php if ($_smarty_tpl->tpl_vars['banCount']->value) {?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['banList']->value, 'banRow');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['banRow']->value) {
?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['banRow']->value['from'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['banRow']->value['to'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['banRow']->value['player'];?>
</td>
		<td><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['banRow']->value['mail'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['banRow']->value['info'];?>
"><?php echo $_smarty_tpl->tpl_vars['banRow']->value['admin'];?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['banRow']->value['theme'];?>
</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<tr>
		<td style="text-align:right;" colspan="5"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['mg_page'];?>
: <?php if ($_smarty_tpl->tpl_vars['page']->value != 1) {?><a href="index.php?page=banList&amp;side=<?php echo $_smarty_tpl->tpl_vars['page']->value-1;?>
">&laquo;</a>&nbsp;<?php }
$_smarty_tpl->tpl_vars['site'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['site']->step = 1;$_smarty_tpl->tpl_vars['site']->total = (int) ceil(($_smarty_tpl->tpl_vars['site']->step > 0 ? $_smarty_tpl->tpl_vars['maxPage']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['maxPage']->value)+1)/abs($_smarty_tpl->tpl_vars['site']->step));
if ($_smarty_tpl->tpl_vars['site']->total > 0) {
for ($_smarty_tpl->tpl_vars['site']->value = 1, $_smarty_tpl->tpl_vars['site']->iteration = 1;$_smarty_tpl->tpl_vars['site']->iteration <= $_smarty_tpl->tpl_vars['site']->total;$_smarty_tpl->tpl_vars['site']->value += $_smarty_tpl->tpl_vars['site']->step, $_smarty_tpl->tpl_vars['site']->iteration++) {
$_smarty_tpl->tpl_vars['site']->first = $_smarty_tpl->tpl_vars['site']->iteration == 1;$_smarty_tpl->tpl_vars['site']->last = $_smarty_tpl->tpl_vars['site']->iteration == $_smarty_tpl->tpl_vars['site']->total;?><a href="index.php?page=banList&amp;side=<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
"><?php if ($_smarty_tpl->tpl_vars['site']->value == $_smarty_tpl->tpl_vars['page']->value) {?><b>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]</b><?php } else { ?>[<?php echo $_smarty_tpl->tpl_vars['site']->value;?>
]<?php }?></a><?php if ($_smarty_tpl->tpl_vars['site']->value != $_smarty_tpl->tpl_vars['maxPage']->value) {?>&nbsp;<?php }
}
}
if ($_smarty_tpl->tpl_vars['page']->value != $_smarty_tpl->tpl_vars['maxPage']->value) {?>&nbsp;<a href="index.php?page=banList&amp;side=<?php echo $_smarty_tpl->tpl_vars['page']->value+1;?>
">&raquo;</a><?php }?></td>
	</tr>
	<tr>
		<td colspan="5"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bn_exists'];
echo pretty_number($_smarty_tpl->tpl_vars['banCount']->value);
echo $_smarty_tpl->tpl_vars['LNG']->value['bn_players_banned'];?>
</td>
	</tr>
<?php } else { ?>
	<tr>
		<td colspan="5"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bn_no_players_banned'];?>
</td>
	</tr>	
<?php }?>
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
