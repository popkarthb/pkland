<?php
/* Smarty version 3.1.30, created on 2022-12-13 12:13:02
  from "/app/styles/templates/game/page.research.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63986c4e2dbb67_36183216',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    '52439b48ef96204ff2653ffe4bb1db566a5c24eb' => 
    array (
      0 => '/app/styles/templates/game/page.research.default.tpl',
      1 => 1661920256,
      2 => 'extends',
    ),
    'b6c4a4aa4e77cba94b9fd13cbccb70a49b23d3c5' => 
    array (
      0 => '/app/styles/templates/game/page.research.default.tpl',
      1 => 1661920256,
      2 => 'file',
    ),
    'caea3f24967636c87bbedef30411d2617fcdf5c6' => 
    array (
      0 => '/app/styles/templates/game/layout.full.tpl',
      1 => 1566224315,
      2 => 'file',
    ),
    'fdc1391b0ab7b521d14da1a048771b4f41e05477' => 
    array (
      0 => '/app/styles/templates/game/main.header.tpl',
      1 => 1662180591,
      2 => 'file',
    ),
    '3656a4034d5586e57c8cab9755b4109091627cf1' => 
    array (
      0 => '/app/styles/templates/game/main.navigation.tpl',
      1 => 1566224315,
      2 => 'file',
    ),
    '8cc530df2d91f6fd4fe06782e8b5690519815d2f' => 
    array (
      0 => '/app/styles/templates/game/main.topnav.tpl',
      1 => 1566224315,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page.research.default.tpl' => 1,
    'file:layout.full.tpl' => 1,
    'file:main.header.tpl' => 1,
    'file:main.navigation.tpl' => 1,
    'file:main.topnav.tpl' => 1,
    'file:main.footer.tpl' => 1,
  ),
),false)) {
function content_63986c4e2dbb67_36183216 (Smarty_Internal_Template $_smarty_tpl) {
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php $_smarty = $_smarty_tpl->smarty; if (!is_callable(\'smarty_function_html_options\')) require_once \'/app/includes/libs/Smarty/plugins/function.html_options.php\';
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
$_smarty_tpl->compiled->nocache_hash = '143701422863986c4dd9b7c5_14417179';
$_smarty_tpl->_subTemplateRender("file:page.research.default.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'b6c4a4aa4e77cba94b9fd13cbccb70a49b23d3c5', 'content_63986c4dda1369_62785958');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.full.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 2, false, 'caea3f24967636c87bbedef30411d2617fcdf5c6', 'content_63986c4e013972_93524718');
}
/* Start inline template "extends:page.research.default.tpl" =============================*/
function content_63986c4dda1369_62785958 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '143701422863986c4dd9b7c5_14417179';
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125187138663986c4ddb6851_98730737', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_153350437863986c4df25e34_31771231', "content");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_158683175863986c4e0114e5_26643480', "script");
?>

<?php
}
/* {block "title"} */
class Block_125187138663986c4ddb6851_98730737 extends Smarty_Internal_Block
{
public $prepend = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_153350437863986c4df25e34_31771231 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['143701422863986c4dd9b7c5_14417179'] = true;
?>

<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Queue\']->value)) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

<div id="buildlist" class="buildlist">
	<table style="width:760px">
		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Queue\']->value, \'List\');
$_smarty_tpl->tpl_vars[\'List\']->iteration = 0;
$_smarty_tpl->tpl_vars[\'List\']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'List\']->value) {
$_smarty_tpl->tpl_vars[\'List\']->iteration++;
$_smarty_tpl->tpl_vars[\'List\']->index++;
$_smarty_tpl->tpl_vars[\'List\']->first = !$_smarty_tpl->tpl_vars[\'List\']->index;
$__foreach_List_0_saved = $_smarty_tpl->tpl_vars[\'List\'];
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php $_smarty_tpl->_assignInScope(\'ID\', $_smarty_tpl->tpl_vars[\'List\']->value[\'element\'] ,true);
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'ResearchList\']->value[$_smarty_tpl->tpl_vars[\'List\']->value[\'element\']])) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php $_smarty_tpl->_assignInScope(\'CQueue\', $_smarty_tpl->tpl_vars[\'ResearchList\']->value[$_smarty_tpl->tpl_vars[\'List\']->value[\'element\']] ,true);
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->iteration;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
.: 
				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'CQueue\']->value) && $_smarty_tpl->tpl_vars[\'CQueue\']->value[\'maxLevel\'] != $_smarty_tpl->tpl_vars[\'CQueue\']->value[\'level\'] && !$_smarty_tpl->tpl_vars[\'IsFullQueue\']->value && $_smarty_tpl->tpl_vars[\'CQueue\']->value[\'buyable\']) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="tech" value="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
					<button type="submit" class="build_submit onlist"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'level\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'List\']->value[\'planet\'])) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 @ <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'planet\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</button>
				</form>
				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'level\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'List\']->value[\'planet\'])) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 @ <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'planet\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'List\']->first) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<br><br><div id="progressbar" data-time="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'resttime\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"></div>
			</td>
			<td>
				<div id="time" data-time="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'time\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><br></div>
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_cancel\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</button>
				</form>
				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

			</td>
			<td>
				<form action="game.php?page=research" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->iteration;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
					<button type="submit" class="build_submit onlist"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_cancel\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</button>
				</form>
				<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

				<br><span style="color:lime" data-time="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'endtime\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" class="timer"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'List\']->value[\'display\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</span>
			</td>
		</tr>
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_smarty_tpl->tpl_vars[\'List\'] = $__foreach_List_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	</table>
</div>
<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'IsLabinBuild\']->value) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
<table width="70%" id="infobox" style="border: 2px solid red; text-align:center;background:transparent"><tr><td><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_building_lab\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</td></tr></table><br><br><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

<table style="width:760px">
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'ResearchList\']->value, \'Element\', false, \'ID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ID\']->value => $_smarty_tpl->tpl_vars[\'Element\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	<tr>
		<td rowspan="2" style="width:120px;">
			<a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
)">
				<img src="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
gebaeude/<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
.gif" alt="" class="top" width="120" height="120">
			</a>
		</td>
		<th>
			<a href="#" onclick="return Dialog.info(<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
)"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</a><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\'] != 0) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 (<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_lvl\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'level\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\'] != 255) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
/<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
)<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		</th>
	</tr>
	<tr>
		<td>
			<table style="width:100%">
				<tr>
					<td class="transparent left" style="width:90%;padding:10px;"><p><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'shortDescription\'][$_smarty_tpl->tpl_vars[\'ID\']->value];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</p>
					<p><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Element\']->value[\'costResources\'], \'RessAmount\', false, \'RessID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'RessID\']->value => $_smarty_tpl->tpl_vars[\'RessAmount\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

					<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'RessID\']->value];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
: <b><span style="color:<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'costOverflow\'][$_smarty_tpl->tpl_vars[\'RessID\']->value] == 0) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
lime<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
red<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'RessAmount\']->value);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</span></b>
					<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</p></td>
					<td class="transparent" style="vertical-align:middle;width:100px">
					<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'maxLevel\'] == $_smarty_tpl->tpl_vars[\'Element\']->value[\'levelToBuild\']) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

						<span style="color:red"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_maxlevel\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</span>
					<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'IsLabinBuild\']->value || $_smarty_tpl->tpl_vars[\'IsFullQueue\']->value || !$_smarty_tpl->tpl_vars[\'Element\']->value[\'buyable\']) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

						<span style="color:red"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\'] == 0) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_tech\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_tech_next_level\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'levelToBuild\']+1;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</span>
					<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

						<form action="game.php?page=research" method="post" class="build_form">
							<input type="hidden" name="cmd" value="insert">
							<input type="hidden" name="tech" value="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'ID\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
							<input type="hidden" name="scrollHeight" >
							<button type="submit" class="build_submit"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'Element\']->value[\'level\'] == 0) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_tech\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_tech_next_level\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'Element\']->value[\'levelToBuild\']+1;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</button>
						</form>
					<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="margin-bottom:10px;">  
			<table style="width:100%">
				<tr>
					<td class="transparent left">
						<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'bd_remaining\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
<br>
						<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'Element\']->value[\'costOverflow\'], \'ResCount\', false, \'ResType\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'ResType\']->value => $_smarty_tpl->tpl_vars[\'ResCount\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

						<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'ResType\']->value];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
: <span style="font-weight:700"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'ResCount\']->value);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</span><br>
						<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

						<br>
					</td>
					<td class="transparent right">
						<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'fgf_time\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

					</td>
				</tr>
				<tr>		
					<td class="transparent left" style="width:68%">
						&nbsp;
					</td>
					<td class="transparent right" style="white-space:nowrap;">
						<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_time($_smarty_tpl->tpl_vars[\'Element\']->value[\'elementTime\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

					</td>
				</tr>	
			</table>
		</td>
	</tr>
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

</table>
<?php
}
}
/* {/block "content"} */
/* {block "script"} */
class Block_158683175863986c4e0114e5_26643480 extends Smarty_Internal_Block
{
public $append = true;
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['143701422863986c4dd9b7c5_14417179'] = true;
?>

    <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'Queue\']->value)) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

        <?php echo '<script'; ?>
 src="scripts/game/research.js"><?php echo '</script'; ?>
>
    <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

<?php echo '<script'; ?>
>
$(function() {
	$(window).scroll(function(event){
		var st = $(this).scrollTop()+43;
		console.log(st);
		$("input[name='scrollHeight']").val(st);
	});
	setTimeout(function(){
		var scrollHeight = window.location.hash.substr(1);
        	window.scrollTo(0, scrollHeight);
	},600);
});
<?php echo '</script'; ?>
>
<?php
}
}
/* {/block "script"} */
/* End inline template "extends:page.research.default.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_63986c4e016d10_39601478 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '143701422863986c4dd9b7c5_14417179';
?>
<!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198599049163986c4e0381e2_08614040', "title");
?>
</title>
	<meta name="generator" content="2Moons <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
	<!-- 
		This website is powered by 2Moons <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

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
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
formate.css?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<?php echo '<script'; ?>
 type="text/javascript">
	var ServerTimezoneOffset = <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'Offset\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
;
	var serverTime 	= new Date(<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[0];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
, <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[1]-1;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
, <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[2];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
, <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[3];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
, <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[4];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
, <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'date\']->value[5];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['ready'];?>
";
	var Skin		= "<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
";
	var Lang		= "<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
";
	var head_info	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_info'];?>
";
	var auth		= <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo (($tmp = @$_smarty_tpl->tpl_vars[\'authlevel\']->value)===null||$tmp===\'\' ? \'0\' : $tmp);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
;
	var days 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['week_day']))===null||$tmp==='' ? '[]' : $tmp);?>
 
	var months 		= <?php echo (($tmp = @json_encode($_smarty_tpl->tpl_vars['LNG']->value['months']))===null||$tmp==='' ? '[]' : $tmp);?>
 ;
	var tdformat	= "<?php echo $_smarty_tpl->tpl_vars['LNG']->value['js_tdformat'];?>
";
	var queryString	= "<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo strtr($_smarty_tpl->tpl_vars[\'queryString\']->value, array("\\\\" => "\\\\\\\\", "\'" => "\\\\\'", "\\"" => "\\\\\\"", "\\r" => "\\\\r", "\\n" => "\\\\n", "</" => "<\\/" ));?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
";
	var isPlayerCardActive	= "<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'isPlayerCardActive\']->value);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	<?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'lang\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/base.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'scripts\']->value, \'scriptname\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	<?php echo '<script'; ?>
 type="text/javascript" src="./scripts/game/<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
.js?v=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'REV\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '</script'; ?>
>
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_41075810463986c4e0d4765_85969604', "script");
?>

	<?php echo '<script'; ?>
 type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	});
	<?php echo '</script'; ?>
>
</head>
<body id="<?php echo (($tmp = @htmlspecialchars($_GET['page']))===null||$tmp==='' ? 'overview' : $tmp);?>
" class="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'bodyclass\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
">
	<div id="tooltip" class="tip"></div>
<?php
}
/* {block "title"} */
class Block_198599049163986c4e0381e2_08614040 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->cached->hashes['143701422863986c4dd9b7c5_14417179'] = true;
?>
 - <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'uni_name\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 - 疯狂大陆<?php
}
}
/* {/block "title"} */
/* {block "script"} */
class Block_41075810463986c4e0d4765_85969604 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_63986c4e0fc389_08110332 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '143701422863986c4dd9b7c5_14417179';
?>
<div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_changelog'];?>
</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_overview'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_IMPERIUM'))) {?><li><a href="game.php?page=imperium"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_empire'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RESEARCH'))) {?><li><a href="game.php?page=research"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_research'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUILDING'))) {?><li><a href="game.php?page=buildings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buildings'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SHIPYARD_FLEET'))) {?><li><a href="game.php?page=shipyard&amp;mode=fleet"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_shipshard'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SHIPYARD_DEFENSIVE'))) {?><li><a href="game.php?page=shipyard&amp;mode=defense"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_defenses'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_OFFICIER')) || isModuleAvailable(@constant('MODULE_DMEXTRAS'))) {?><li><a href="game.php?page=officier"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_officiers'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TRADER'))) {?><li><a href="game.php?page=trader"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_trader'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_FLEET_TRADER'))) {?><li><a href="game.php?page=fleetDealer"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleettrader'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TRADER'))) {?><li><a href="game.php?page=fleetTable"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_fleet'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_TECHTREE'))) {?><li><a href="game.php?page=techtree"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_technology'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RESSOURCE_LIST'))) {?><li><a href="game.php?page=resources"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_resources'];?>
</a></li><?php }?>
		<li class="menucat2-head"></li>
		<?php if (isModuleAvailable(@constant('MODULE_GALAXY'))) {?><li><a href="game.php?page=galaxy"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_galaxy'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_ALLIANCE'))) {?><li><a href="game.php?page=alliance"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_alliance'];?>
</a></li><?php }?>
        <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!empty($_smarty_tpl->tpl_vars[\'hasBoard\']->value)) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
<li><a href="game.php?page=board" target="forum"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_forums\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</a></li><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		<?php if (isModuleAvailable(@constant('MODULE_STATISTICS'))) {?><li><a href="game.php?page=statistics"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_statistics'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_RECORDS'))) {?><li><a href="game.php?page=records"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_records'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BATTLEHALL'))) {?><li><a href="game.php?page=battleHall"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_topkb'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SEARCH'))) {?><li><a href="game.php?page=search"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_search'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_CHAT'))) {?><li><a href="game.php?page=chat"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_chat'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_SUPPORT'))) {?><li><a href="game.php?page=ticket"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_support'];?>
</a></li><?php }?>
		<li><a href="game.php?page=questions"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_faq'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_BANLIST'))) {?><li><a href="game.php?page=banList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_banned'];?>
</a></li><?php }?>
		<li><a href="index.php?page=rules" target="rules"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_rules'];?>
</a></li>
		<?php if (isModuleAvailable(@constant('MODULE_SIMULATOR'))) {?><li><a href="game.php?page=battleSimulator"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_battlesim'];?>
</a></li><?php }?>

		<li class="menucat3-head"></li>
		<?php if (isModuleAvailable(@constant('MODULE_MESSAGES'))) {?><li><a href="game.php?page=messages"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_messages'];
echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'new_message\']->value > 0) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
<span id="newmes"> (<span id="newmesnum"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'new_message\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</span>)</span><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_NOTICE'))) {?><li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_notes'];?>
</a></li><?php }?>
		<?php if (isModuleAvailable(@constant('MODULE_BUDDYLIST'))) {?><li><a href="game.php?page=buddyList"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_buddylist'];?>
</a></li><?php }?>
		<li><a href="game.php?page=settings"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_options'];?>
</a></li>
		<li><a href="game.php?page=logout"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_logout'];?>
</a></li>
		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'authlevel\']->value > 0) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
<li><a href="./admin.php" style="color:lime"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'lm_administration\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 (<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'VERSION\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
)</a></li><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_disclamer'];?>
</a></div>
</div><?php
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
function content_63986c4e210953_36157916 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '143701422863986c4dd9b7c5_14417179';
?>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
                       <img src="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
planeten/small/s_<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'image\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
.jpg" alt="">
					</td>
					<td id="planetSelectorWrapper">
                        <label for="planetSelector"></label>
						<select id="planetSelector">
							<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo smarty_function_html_options(array(\'options\'=>$_smarty_tpl->tpl_vars[\'PlanetSelect\']->value,\'selected\'=>$_smarty_tpl->tpl_vars[\'current_pid\']->value),$_smarty_tpl);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td><img src="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'dpath\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
images/<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
.gif" alt=""></td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td class="res_name"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tech\'][$_smarty_tpl->tpl_vars[\'resourceID\']->value];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td class="res_current tooltip" data-tooltip-content="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><span<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td class="res_current tooltip" id="current_<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td class="res_max tooltip" id="max_<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" data-tooltip-content="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo shortly_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

								<tr>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'])) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php $_tmp_array = isset($_smarty_tpl->tpl_vars[\'resourceData\']) ? $_smarty_tpl->tpl_vars[\'resourceData\']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, \'array\');
}
$_tmp_array[\'current\'] = $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']+$_smarty_tpl->tpl_vars[\'resourceData\']->value[\'used\'];
$_smarty_tpl->_assignInScope(\'resourceData\', $_tmp_array ,true);
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td class="res_current"><span<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'] < 0) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 style="color:red"<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
&nbsp;/&nbsp;<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</span></td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td class="res_current" id="current_<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

								</tr>
								<tr>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']) || !isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\'])) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td>&nbsp;</td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } else { ?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<td class="res_max" id="max_<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" data-real="<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo pretty_number($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</td>
									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

									<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

								</tr>
								<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (!$_smarty_tpl->tpl_vars[\'vmode\']->value) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		<?php echo '<script'; ?>
 type="text/javascript">
		var viewShortlyNumber	= <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'shortlyNumber\']->value);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
;
		var vacation			= <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'vmode\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
;
        $(function() {
		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'resourceTable\']->value, \'resourceData\', false, \'resourceID\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'resourceID\']->value => $_smarty_tpl->tpl_vars[\'resourceData\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if (isset($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\'])) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

            resourceTicker({
                available: <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'current\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
,
                limit: [0, <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'max\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
],
                production: <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo json_encode($_smarty_tpl->tpl_vars[\'resourceData\']->value[\'production\']);?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
,
                valueElem: "current_<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'resourceData\']->value[\'name\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
"
            }, true);
		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

        });
		<?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="scripts/game/topnav.js"><?php echo '</script'; ?>
>
        <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasGate\']->value) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
echo '<script'; ?>
 src="scripts/game/gate.js"><?php echo '</script'; ?>
><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

		<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	</div>
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'closed\']->value) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'ov_closed\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'delete\']->value) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'delete\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php } elseif ($_smarty_tpl->tpl_vars[\'vacation\']->value) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

	<div class="infobox"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'tn_vacation_mode\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 <?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'vacation\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</div>
	<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
}
/* End inline template "/app/styles/templates/game/layout.full.tpl" =============================*/
/* Start inline template "extends:page.research.default.tpl" =============================*/
function content_63986c4e013972_93524718 ($_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '143701422863986c4dd9b7c5_14417179';
foreach (array('bodyclass'=>"full") as $ik => $iv) {
$_smarty_tpl->tpl_vars[$ik] =  new Smarty_Variable($iv);
}
$_smarty_tpl->_subTemplateRender("file:main.header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('bodyclass'=>"full"), 0, false, 'fdc1391b0ab7b521d14da1a048771b4f41e05477', 'content_63986c4e016d10_39601478');
?>

<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php if ($_smarty_tpl->tpl_vars[\'hasAdminAccess\']->value) {?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

<div class="globalWarning">
<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_1\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
 <a id="drop-admin"><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_link\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
</a><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'LNG\']->value[\'admin_access_2\'];?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

</div>
<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php }?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.navigation.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '3656a4034d5586e57c8cab9755b4109091627cf1', 'content_63986c4e0fc389_08110332');
?>

<?php
$_smarty_tpl->_subTemplateRender("file:main.topnav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false, '8cc530df2d91f6fd4fe06782e8b5690519815d2f', 'content_63986c4e210953_36157916');
?>

<div id="content"><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_117794224263986c4e2d1c54_20444489', "content");
?>
</div>
<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars[\'cronjobs\']->value, \'cronjob\');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars[\'cronjob\']->value) {
?>/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
<img src="cronjob.php?cronjobID=<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php echo $_smarty_tpl->tpl_vars[\'cronjob\']->value;?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>
" alt=""><?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';?>

<?php echo '/*%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
/*/%%SmartyNocache:143701422863986c4dd9b7c5_14417179%%*/';
}
/* {block "content"} */
class Block_117794224263986c4e2d1c54_20444489 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "content"} */
/* End inline template "extends:page.research.default.tpl" =============================*/
}
