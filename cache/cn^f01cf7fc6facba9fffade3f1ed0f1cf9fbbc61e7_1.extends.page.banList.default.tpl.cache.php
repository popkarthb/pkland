<?php
/* Smarty version 3.1.30, created on 2022-12-13 04:52:11
  from "/app/styles/templates/login/page.banList.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_639804fb936da8_49279229',
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
  'includes' => 
  array (
    'file:page.banList.default.tpl' => 1,
    'file:layout.normal.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_639804fb936da8_49279229 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '23391399639804fb86b973_83029855';
$_smarty_tpl->_subTemplateRender("file:page.banList.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'd4f874bddbaa7b6fecc372ba2dfa707942377596', 'content_639804fb870d76_42691203');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.normal.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'be94e4e72d1ce870049bf99a77fa3cb9ac6af562', 'content_639804fb8ec027_57516468');
}
/* Start inline template "extends:page.banList.default.tpl" =============================*/
function content_639804fb870d76_42691203 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '23391399639804fb86b973_83029855';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_980224157639804fb877a80_85402347', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1024324117639804fb8e83c3_53440606', "content");
}
/* {block "title"} */
class Block_980224157639804fb877a80_85402347 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['siteTitleBanList'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1024324117639804fb8e83c3_53440606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['23391399639804fb86b973_83029855'] = true;
?>

<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'isMultiUniverse\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
<p>
<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'universeSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'UNI\']->value,\'class\'=>"changeUni",\'id\'=>"universe",\'name\'=>"universe"),$_smarty_tpl);?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

</p><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

<table>
	<tr>
		<th colspan="5"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bn_players_banned_list'];?>
</th>
	</tr>
<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'banCount\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

	<tr>
		<td style="text-align:right;" colspan="5"><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_page\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
: <?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value != 1) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value-1;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php
$_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++) {
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
"><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value == $_smarty_tpl->tpl_vars[\'page\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
]</b><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php } else { ?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
[<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
]<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</a><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value != $_smarty_tpl->tpl_vars[\'maxPage\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }
}
?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value != $_smarty_tpl->tpl_vars[\'maxPage\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
&nbsp;<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value+1;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
">&raquo;</a><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</td>
	</tr>
<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bn_from'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bn_until'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bn_player'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bn_by'];?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bn_reason'];?>
</td>
	</tr>
<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'banCount\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

	<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'banList\']->value, \'banRow\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'banRow\']->value) {
?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

	<tr>
		<td><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'from\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'to\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</td>
		<td><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'player\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</td>
		<td><a href="mailto:<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'mail\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
" title="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'info\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
"><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'admin\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</a></td>
		<td><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'banRow\']->value[\'theme\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</td>
	</tr>
	<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

	<tr>
		<td style="text-align:right;" colspan="5"><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'mg_page\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
: <?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value != 1) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value-1;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
">&laquo;</a>&nbsp;<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php
$_smarty_tpl->tpl_vars[\'site\'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars[\'site\']->step = 1;$_smarty_tpl->tpl_vars[\'site\']->total = (int) ceil(($_smarty_tpl->tpl_vars[\'site\']->step > 0 ? $_smarty_tpl->tpl_vars[\'maxPage\']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars[\'maxPage\']->value)+1)/abs($_smarty_tpl->tpl_vars[\'site\']->step));
if ($_smarty_tpl->tpl_vars[\'site\']->total > 0) {
for ($_smarty_tpl->tpl_vars[\'site\']->value = 1, $_smarty_tpl->tpl_vars[\'site\']->iteration = 1;$_smarty_tpl->tpl_vars[\'site\']->iteration <= $_smarty_tpl->tpl_vars[\'site\']->total;$_smarty_tpl->tpl_vars[\'site\']->value += $_smarty_tpl->tpl_vars[\'site\']->step, $_smarty_tpl->tpl_vars[\'site\']->iteration++) {
$_smarty_tpl->tpl_vars[\'site\']->first = $_smarty_tpl->tpl_vars[\'site\']->iteration == 1;$_smarty_tpl->tpl_vars[\'site\']->last = $_smarty_tpl->tpl_vars[\'site\']->iteration == $_smarty_tpl->tpl_vars[\'site\']->total;?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
"><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value == $_smarty_tpl->tpl_vars[\'page\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
<b>[<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
]</b><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php } else { ?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
[<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'site\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
]<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</a><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'site\']->value != $_smarty_tpl->tpl_vars[\'maxPage\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
&nbsp;<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }
}
?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if ($_smarty_tpl->tpl_vars[\'page\']->value != $_smarty_tpl->tpl_vars[\'maxPage\']->value) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
&nbsp;<a href="index.php?page=banList&amp;side=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'page\']->value+1;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
">&raquo;</a><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</td>
	</tr>
	<tr>
		<td colspan="5"><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_exists\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'banCount\']->value);?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_players_banned\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</td>
	</tr>
<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php } else { ?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

	<tr>
		<td colspan="5"><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bn_no_players_banned\'];?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</td>
	</tr>	
<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

</table>
<?php
}
}
/* {/block "content"} */
/* End inline template "extends:page.banList.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
function content_639804fb8ee4c4_98349420 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '23391399639804fb86b973_83029855';
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<link rel="stylesheet" type="text/css" href="styles/resource/css/login/main.css?v=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<title>???????????? - pkland.lol - ????????????</title>
	<meta name="generator" content="pkland <?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
">
	<meta name="keywords" content="????????????, pkland, Browsergame">
	<meta name="description" content="pkland Browsergame powerd by pkland.lol"> 
	<!--[if lt IE 9]>
	<?php echo '<script'; ?>
 src="scripts/base/html5.js"><?php echo '</script'; ?>
>
	<![endif]-->
	<?php echo '<script'; ?>
 src="scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1164759687639804fb903455_47640755', "script");
?>
	
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
">
	<div id="page">
<?php
}
/* {block "script"} */
class Block_1164759687639804fb903455_47640755 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
/* Start inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
function content_639804fb90ee10_32218568 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '23391399639804fb86b973_83029855';
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
		<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php if (count($_smarty_tpl->tpl_vars[\'languages\']->value) > 1) {?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

		<ul id="language">
		<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'languages\']->value, \'langName\', false, \'langKey\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'langKey\']->value => $_smarty_tpl->tpl_vars[\'langName\']->value) {
?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

		
		<li><a href="?lang=<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
" rel="alternate" hreflang="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
" title="<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
"><span class="flags <?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'langKey\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
"><?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php echo $_smarty_tpl->tpl_vars[\'langName\']->value;?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>
</span></a></li>
		
		<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

		</ul>
		<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php }?>/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';?>

	</nav>
</header>
<?php
}
/* End inline template "/app/styles/templates/login/layout.normal.tpl" =============================*/
/* Start inline template "extends:page.banList.default.tpl" =============================*/
function content_639804fb8ec027_57516468 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '23391399639804fb86b973_83029855';
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '78e23b7c67061423c8f18765934ee70e904f4292', 'content_639804fb8ee4c4_98349420');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '4f71a8bb5716be7638d10aaf81651aed6afa04da', 'content_639804fb90ee10_32218568');
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_268397601639804fb92f144_70127120', 'title');
?>
</h1></td>
						<td class="box-inner-header-right"></td>
					</tr>
					<tr class="box-inner-content">
						<td class="box-inner-content-left"></td>
						<td class="box-inner-content-center"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143597887639804fb932572_30515925', 'content');
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
<?php echo '/*%%SmartyNocache:23391399639804fb86b973_83029855%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:23391399639804fb86b973_83029855%%*/';
}
/* {block 'title'} */
class Block_268397601639804fb92f144_70127120 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'title'} */
/* {block 'content'} */
class Block_143597887639804fb932572_30515925 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <?php
}
}
/* {/block 'content'} */
/* End inline template "extends:page.banList.default.tpl" =============================*/
}
