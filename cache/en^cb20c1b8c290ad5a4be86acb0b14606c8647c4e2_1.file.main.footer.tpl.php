<?php
/* Smarty version 3.1.30, created on 2022-12-13 04:52:24
  from "/app/styles/templates/login/main.footer.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63980508356e69_62299496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb20c1b8c290ad5a4be86acb0b14606c8647c4e2' => 
    array (
      0 => '/app/styles/templates/login/main.footer.tpl',
      1 => 1662179782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63980508356e69_62299496 (Smarty_Internal_Template $_smarty_tpl) {
?>
<footer>
	<a href="index.php?page=disclamer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_disclamer'];?>
</a><br>Powered by pkland.lol 2022
</footer>
</div>
<div id="dialog" style="display:none;"></div>
<?php echo '<script'; ?>
>
var LoginConfig = {
    'isMultiUniverse': <?php echo json_encode($_smarty_tpl->tpl_vars['isMultiUniverse']->value);?>
,
	'unisWildcast': <?php echo json_encode($_smarty_tpl->tpl_vars['unisWildcast']->value);?>
,
	'referralEnable' : <?php echo json_encode($_smarty_tpl->tpl_vars['referralEnable']->value);?>
,
	'basePath' : <?php echo json_encode($_smarty_tpl->tpl_vars['basepath']->value);?>

};
<?php echo '</script'; ?>
>
<?php if ($_smarty_tpl->tpl_vars['analyticsEnable']->value) {
echo '<script'; ?>
 type="text/javascript" src="http://www.google-analytics.com/ga.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
try{
var pageTracker = _gat._getTracker("<?php echo $_smarty_tpl->tpl_vars['analyticsUID']->value;?>
");
pageTracker._trackPageview();
} catch(err) {}<?php echo '</script'; ?>
>
<?php }?>
</body>
</html>
<?php }
}
