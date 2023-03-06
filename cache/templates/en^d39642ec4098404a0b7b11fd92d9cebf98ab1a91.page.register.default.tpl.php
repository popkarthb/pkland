<?php
/* Smarty version 3.1.30, created on 2022-12-13 19:59:06
  from "/app/styles/templates/login/page.register.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6398d98ac400c2_87632983',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'b3290e073dc41f8b80c746fea763d6d79d2c2f83' => 
    array (
      0 => '/app/styles/templates/login/page.register.default.tpl',
      1 => 1566224315,
      2 => 'extends',
    ),
    'de801330e9c063e562ee87c39289a2effd2fe528' => 
    array (
      0 => '/app/styles/templates/login/page.register.default.tpl',
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
function content_6398d98ac400c2_87632983 (Smarty_Internal_Template $_smarty_tpl) {
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
	
<link rel="stylesheet" type="text/css" href="styles/resource/css/login/register.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
<?php if ($_smarty_tpl->tpl_vars['recaptchaEnable']->value) {?>
<script type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"></script>
<?php }?>
<script type="text/javascript" src="scripts/login/register.js"></script>
	
</head>
<body id="register" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
						<td class="box-inner-header-center"><h1>Register</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center">
<div id="registerFormWrapper">
<form id="registerForm" method="post" action="index.php?page=register" data-action="index.php?page=register">
<input type="hidden" value="send" name="mode">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['externalAuth']->value['account'];?>
" name="externalAuth[account]">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['externalAuth']->value['method'];?>
" name="externalAuth[method]">
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['referralData']->value['id'];?>
" name="referralID">
	<div class="rowForm">
		<label for="universe">Universe</label>
		<select name="uni" id="universe" class="changeAction"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['universeSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['UNI']->value),$_smarty_tpl);?>
</select>
			</div>
	<?php if (!empty($_smarty_tpl->tpl_vars['externalAuth']->value['account'])) {?>
	<?php if ($_smarty_tpl->tpl_vars['facebookEnable']->value) {?>
	<div class="rowForm">
		<label><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerFacebookAccount'];?>
</label>
		<span class="text fbname"><?php echo $_smarty_tpl->tpl_vars['accountName']->value;?>
</span>
	</div>
	<?php }?>
	<?php } elseif (empty($_smarty_tpl->tpl_vars['referralData']->value['id'])) {?>
	<?php if ($_smarty_tpl->tpl_vars['facebookEnable']->value) {?>
	<div class="rowForm">
		<label><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerFacebookAccount'];?>
</label>
		<a href="#" data-href="index.php?page=externalAuth&method=facebook" class="fb_login"><img src="styles/resource/images/facebook/fb-connect-large.png" alt=""></a>
	</div>
	<?php }?>
	<?php }?>
	<div class="rowForm">
		<label for="username">Username</label>
		<input type="text" class="input" name="username" id="username" maxlenght="32">
				<span class="inputDesc">The Username must be at least 3 and maximum of 25 characters and points, and may consist of numbers, letters, underscores and spaces</span>
	</div>
	<div class="rowForm">
		<label for="password">Password</label>
		<input type="password" class="input" name="password" id="password">
				<span class="inputDesc">The password must be at least 8 characters long.</span>
	</div>
	<div class="rowForm">
		<label for="passwordReplay">Repeat Password</label>
		<input type="password" class="input" name="passwordReplay" id="passwordReplay">
				<span class="inputDesc">Please enter the same password.</span>
	</div>
	<div class="rowForm">
		<label for="email">E-Mail</label>
		<input type="email" class="input" name="email" id="email">
				<span class="inputDesc">Please enter your E-Mail address!</span>
	</div>
	<div class="rowForm">
		<label for="emailReplay">Repeat E-Mail</label>
		<input type="email" class="input" name="emailReplay" id="emailReplay">
				<span class="inputDesc">Please input of your email address once again to the security!</span>
	</div>
	<?php if (count($_smarty_tpl->tpl_vars['languages']->value) > 1) {?>
	<div class="rowForm">
		<label for="language"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerLanguage'];?>
</label>
		<select name="lang" id="language"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['languages']->value,'selected'=>$_smarty_tpl->tpl_vars['lang']->value),$_smarty_tpl);?>
</select>
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['language'])) {?><span class="error errorLanguage"></span><?php }?>
		<div class="clear"></div>
	</div>
	<?php }?>
	<?php if (!empty($_smarty_tpl->tpl_vars['referralData']->value['name'])) {?>
	<div class="rowForm">
		<label for="language"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerReferral'];?>
</label>
		<span class="text"><?php echo $_smarty_tpl->tpl_vars['referralData']->value['name'];?>
</span>
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['language'])) {?><span class="error errorLanguage"></span><?php }?>
		<div class="clear"></div>
	</div>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['recaptchaEnable']->value) {?>
	<div class="rowForm" id="captchaRow">
		<div>
			<label><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerCaptcha'];?>
</label>
			<!--<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerCaptchaDesc'];?>
</span>-->
			<div class="g-recaptcha" data-sitekey="<?php echo $_smarty_tpl->tpl_vars['recaptchaPublicKey']->value;?>
"></div>
		</div>
		<div class="clear"></div>
	</div>
	<?php }?>
	<div class="rowForm">
		<label for="rules">Rules</label>
		<input type="checkbox" name="rules" id="rules" value="1">
				<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['registerRulesDesc']->value;?>
</span>
	</div>
	<div class="rowForm">
		<input type="submit" class="submitButton" value="Regist Now!">
	</div>
</form>
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
