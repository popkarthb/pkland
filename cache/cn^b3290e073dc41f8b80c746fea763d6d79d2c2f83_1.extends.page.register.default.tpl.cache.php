<?php
/* Smarty version 3.1.30, created on 2022-12-13 07:54:59
  from "/app/styles/templates/login/page.register.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63982fd3e99576_06876370',
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
  'includes' => 
  array (
    'file:page.register.default.tpl' => 1,
    'file:layout.normal.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_63982fd3e99576_06876370 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '53626416563982fd3db40e7_08641918';
$_smarty_tpl->_subTemplateRender("file:page.register.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'de801330e9c063e562ee87c39289a2effd2fe528', 'content_63982fd3db9231_35151596');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.normal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'be94e4e72d1ce870049bf99a77fa3cb9ac6af562', 'content_63982fd3e4ed61_03527497');
}
/* Start inline template "extends:page.register.default.tpl" =============================*/
function content_63982fd3db9231_35151596 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '53626416563982fd3db40e7_08641918';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94258789863982fd3dc0743_90341073', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_94187549763982fd3e41784_50483025', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_42842836963982fd3e4d0e3_71758987', "script");
}
/* {block "title"} */
class Block_94258789863982fd3dc0743_90341073 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleRegister'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_94187549763982fd3e41784_50483025 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['53626416563982fd3db40e7_08641918'] = true;
?>

<div id="registerFormWrapper">
<form id="registerForm" method="post" action="index.php?page=register" data-action="index.php?page=register">
<input type="hidden" value="send" name="mode">
<input type="hidden" value="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'externalAuth\']->value[\'account\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" name="externalAuth[account]">
<input type="hidden" value="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'externalAuth\']->value[\'method\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" name="externalAuth[method]">
<input type="hidden" value="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'referralData\']->value[\'id\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" name="referralID">
	<div class="rowForm">
		<label for="universe"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['universe'];?>
</label>
		<select name="uni" id="universe" class="changeAction"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'universeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'UNI\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</select>
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['uni'])) {?><span class="error errorUni"></span><?php }?>
	</div>
	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'externalAuth\']->value[\'account\'])) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if ($_smarty_tpl->tpl_vars[\'facebookEnable\']->value) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<div class="rowForm">
		<label><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerFacebookAccount\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</label>
		<span class="text fbname"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'accountName\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</span>
	</div>
	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php } elseif (empty($_smarty_tpl->tpl_vars[\'referralData\']->value[\'id\'])) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if ($_smarty_tpl->tpl_vars[\'facebookEnable\']->value) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<div class="rowForm">
		<label><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerFacebookAccount\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</label>
		<a href="#" data-href="index.php?page=externalAuth&method=facebook" class="fb_login"><img src="styles/resource/images/facebook/fb-connect-large.png" alt=""></a>
	</div>
	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<div class="rowForm">
		<label for="username"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerUsername'];?>
</label>
		<input type="text" class="input" name="username" id="username" maxlenght="32">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['username'])) {?><span class="error errorUsername"></span><?php }?>
		<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerUsernameDesc'];?>
</span>
	</div>
	<div class="rowForm">
		<label for="password"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerPassword'];?>
</label>
		<input type="password" class="input" name="password" id="password">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['password'])) {?><span class="error errorPassword"></span><?php }?>
		<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerPasswordDesc'];?>
</span>
	</div>
	<div class="rowForm">
		<label for="passwordReplay"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerPasswordReplay'];?>
</label>
		<input type="password" class="input" name="passwordReplay" id="passwordReplay">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['passwordReplay'])) {?><span class="error errorPasswordReplay"></span><?php }?>
		<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerPasswordReplayDesc'];?>
</span>
	</div>
	<div class="rowForm">
		<label for="email"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerEmail'];?>
</label>
		<input type="email" class="input" name="email" id="email">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['email'])) {?><span class="error errorEmail"></span><?php }?>
		<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerEmailDesc'];?>
</span>
	</div>
	<div class="rowForm">
		<label for="emailReplay"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerEmailReplay'];?>
</label>
		<input type="email" class="input" name="emailReplay" id="emailReplay">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['emailReplay'])) {?><span class="error errorEmailReplay"></span><?php }?>
		<span class="inputDesc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerEmailReplayDesc'];?>
</span>
	</div>
	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value) > 1) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<div class="rowForm">
		<label for="language"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerLanguage\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</label>
		<select name="lang" id="language"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'languages\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'lang\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</select>
		<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'error\']->value[\'language\'])) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
<span class="error errorLanguage"></span><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

		<div class="clear"></div>
	</div>
	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'referralData\']->value[\'name\'])) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<div class="rowForm">
		<label for="language"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerReferral\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</label>
		<span class="text"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'referralData\']->value[\'name\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</span>
		<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'error\']->value[\'language\'])) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
<span class="error errorLanguage"></span><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

		<div class="clear"></div>
	</div>
	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if ($_smarty_tpl->tpl_vars[\'recaptchaEnable\']->value) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<div class="rowForm" id="captchaRow">
		<div>
			<label><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerCaptcha\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</label>
			<!--<span class="inputDesc"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'registerCaptchaDesc\'];?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</span>-->
			<div class="g-recaptcha" data-sitekey="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'recaptchaPublicKey\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
"></div>
		</div>
		<div class="clear"></div>
	</div>
	<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	<div class="rowForm">
		<label for="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['registerRules'];?>
</label>
		<input type="checkbox" name="rules" id="rules" value="1">
		<?php if (!empty($_smarty_tpl->tpl_vars['error']->value['rules'])) {?><span class="error errorRules"></span><?php }?>
		<span class="inputDesc"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'registerRulesDesc\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</span>
	</div>
	<div class="rowForm">
		<input type="submit" class="submitButton" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['buttonRegister'];?>
">
	</div>
</form>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_42842836963982fd3e4d0e3_71758987 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['53626416563982fd3db40e7_08641918'] = true;
?>

<link rel="stylesheet" type="text/css" href="styles/resource/css/login/register.css?v=<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
">
<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if ($_smarty_tpl->tpl_vars[\'recaptchaEnable\']->value) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

<?php echo '<script'; ?>
 type="text/javascript" src="https://www.google.com/recaptcha/api.js?hl=<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
"><?php echo '</script'; ?>
>
<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

<?php echo '<script'; ?>
 type="text/javascript" src="scripts/login/register.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
/* End inline template "extends:page.register.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
function content_63982fd3e510c2_96629507 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '53626416563982fd3db40e7_08641918';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title>???????????? - pkland.lol - ????????????</title>
	<meta name="generator" content="pkland <?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
">
	<meta name="keywords" content="????????????, pkland, Browsergame">
	<meta name="description" content="pkland Browsergame powerd by pkland.lol"> 
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="scripts/base/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2376001463982fd3e66465_45471574', "script");
?>
	
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
">
	<div id="page">
<?php
}
/* {block "script"} */
class Block_2376001463982fd3e66465_45471574 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
function content_63982fd3e718e8_61685957 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '53626416563982fd3db40e7_08641918';
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
		<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value) > 1) {?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'languages\']->value, \'langName\', false, \'langKey\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'langKey\']->value => $_smarty_tpl->tpl_vars[\'langName\']->value) {
?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

		
		<li><a href="?lang=<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
" title="<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
"><?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>
</span></a></li>
		
		<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php }?>/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';?>

	</nav>
</header>
<?php
}
/* End inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
/* Start inline template "extends:page.register.default.tpl" =============================*/
function content_63982fd3e4ed61_03527497 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '53626416563982fd3db40e7_08641918';
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '78e23b7c67061423c8f18765934ee70e904f4292', 'content_63982fd3e510c2_96629507');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '4f71a8bb5716be7638d10aaf81651aed6afa04da', 'content_63982fd3e718e8_61685957');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_30141874563982fd3e91fd9_50012845', 'title');
?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_57400312763982fd3e952f7_29209022', 'content');
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
<?php echo '/*%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:53626416563982fd3db40e7_08641918%%*/';
}
/* {block 'title'} */
class Block_30141874563982fd3e91fd9_50012845 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_57400312763982fd3e952f7_29209022 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* End inline template "extends:page.register.default.tpl" =============================*/
}
