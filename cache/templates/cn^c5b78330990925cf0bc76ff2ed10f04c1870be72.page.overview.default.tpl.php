<?php
/* Smarty version 3.1.30, created on 2022-12-13 12:08:38
  from "/app/styles/templates/game/page.overview.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63986b461acb85_27704229',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'b6338a1a0ea808a201c354572e72c2520f5ed9c1' => 
    array (
      0 => '/app/styles/templates/game/page.overview.default.tpl',
      1 => 1566224315,
      2 => 'extends',
    ),
    '98c268b4cbf0ff81b065aaa78dda725715780c3e' => 
    array (
      0 => '/app/styles/templates/game/page.overview.default.tpl',
      1 => 1566224315,
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
  'cache_lifetime' => 604800,
),true)) {
function content_63986b461acb85_27704229 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>基地概况 - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - 疯狂大陆</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/boilerplate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/ingame/main.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/jquery.fancybox.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="./styles/resource/css/base/validationEngine.jquery.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
formate.css?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
">
	<link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
	<script type="text/javascript">
	var ServerTimezoneOffset = <?php echo $_smarty_tpl->tpl_vars['Offset']->value;?>
;
	var serverTime 	= new Date(<?php echo $_smarty_tpl->tpl_vars['date']->value[0];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[1]-1;?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[2];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[3];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[4];?>
, <?php echo $_smarty_tpl->tpl_vars['date']->value[5];?>
);
	var startTime	= serverTime.getTime();
	var localTime 	= serverTime;
	var localTS 	= startTime;
	var Gamename	= document.title;
	var Ready		= "就绪";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "提示";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["\u661f\u671f\u65e5","\u661f\u671f\u4e00","\u661f\u671f\u4e8c","\u661f\u671f\u4e09","\u661f\u671f\u56db","\u661f\u671f\u4e94","\u661f\u671f\u516d"] 
	var months 		= ["1\u6708","2\u6708","3\u6708","4\u6708","5\u6708","6\u6708","7\u6708","8\u6708","9\u6708","10\u6708","11\u6708","12\u6708"] ;
	var tdformat	= "[Y]年[M][d]日 [H]:[i]:[s]";
	var queryString	= "<?php echo strtr($_smarty_tpl->tpl_vars['queryString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
	var isPlayerCardActive	= "<?php echo json_encode($_smarty_tpl->tpl_vars['isPlayerCardActive']->value);?>
";

	setInterval(function() {
		serverTime.setSeconds(serverTime.getSeconds()+1);
	}, 1000);
	</script>
	<script type="text/javascript" src="./scripts/base/jquery.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.ui.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.cookie.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.fancybox.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/jquery.validationEngine.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/base/tooltip.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<script type="text/javascript" src="./scripts/game/base.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['scripts']->value, 'scriptname');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->value) {
?>
	<script type="text/javascript" src="./scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js?v=<?php echo $_smarty_tpl->tpl_vars['REV']->value;?>
"></script>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	
    <script src="scripts/game/overview.js"></script>

	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="overview" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
">
	<div id="tooltip" class="tip"></div>

<?php if ($_smarty_tpl->tpl_vars['hasAdminAccess']->value) {?>
<div class="globalWarning">
<?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_1'];?>
 <a id="drop-admin"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_link'];?>
</a><?php echo $_smarty_tpl->tpl_vars['LNG']->value['admin_access_2'];?>

</div>
<?php }?>
<div id="leftmenu">
	<ul id="menu">
		<li class="menu-head"><a href="game.php?page=changelog">修改日志</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview">基地概况</a></li>
		<li><a href="game.php?page=imperium">基地统计</a></li>		<li><a href="game.php?page=research">科研项目</a></li>		<li><a href="game.php?page=buildings">基地建设</a></li>		<li><a href="game.php?page=shipyard&amp;mode=fleet">部队生产</a></li>		<li><a href="game.php?page=shipyard&amp;mode=defense">防御设施</a></li>		<li><a href="game.php?page=officier">钻石商场</a></li>		<li><a href="game.php?page=trader">资源转换</a></li>		<li><a href="game.php?page=fleetDealer">贸易</a></li>		<li><a href="game.php?page=fleetTable">部队调度</a></li>		<li><a href="game.php?page=techtree">科技树</a></li>		<li><a href="game.php?page=resources">资源报表</a></li>		<li class="menucat2-head"></li>
		<li><a href="game.php?page=galaxy">地图</a></li>		<li><a href="game.php?page=alliance">联盟</a></li>        <?php if (!empty($_smarty_tpl->tpl_vars['hasBoard']->value)) {?><li><a href="game.php?page=board" target="forum"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_forums'];?>
</a></li><?php }?>
		<li><a href="game.php?page=statistics">统计</a></li>		<li><a href="game.php?page=records">宇宙记录</a></li>		<li><a href="game.php?page=battleHall">战况</a></li>		<li><a href="game.php?page=search">搜索</a></li>		<li><a href="game.php?page=chat">聊天</a></li>		<li><a href="game.php?page=ticket">客服</a></li>		<li><a href="game.php?page=questions">常见问题</a></li>
		<li><a href="game.php?page=banList">监狱</a></li>		<li><a href="index.php?page=rules" target="rules">规则</a></li>
		<li><a href="game.php?page=battleSimulator">战斗模拟器</a></li>
		<li class="menucat3-head"></li>
		<li><a href="game.php?page=messages">消息<?php if ($_smarty_tpl->tpl_vars['new_message']->value > 0) {?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a></li>		<li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);">笔记</a></li>		<li><a href="game.php?page=buddyList">盟友</a></li>		<li><a href="game.php?page=settings">选项</a></li>
		<li><a href="game.php?page=logout">退出</a></li>
		<?php if ($_smarty_tpl->tpl_vars['authlevel']->value > 0) {?><li><a href="./admin.php" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_administration'];?>
 (<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
)</a></li><?php }?>
		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank">联系方式</a></div>
</div>
<div id="page">
	<div id="header">
		<table id="headerTable">
			<tbody>
				<tr>
					<td id="planetImage">
                       <img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
.jpg" alt="">
					</td>
					<td id="planetSelectorWrapper">
                        <label for="planetSelector"></label>
						<select id="planetSelector">
							<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['PlanetSelect']->value,'selected'=>$_smarty_tpl->tpl_vars['current_pid']->value),$_smarty_tpl);?>

						</select>
					</td>
					<td id="resourceWrapper">
						<table id="resourceTable">
							<tbody>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<td><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
images/<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
.gif" alt=""></td>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<td class="res_name"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['resourceID']->value];?>
</td>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<?php if ($_smarty_tpl->tpl_vars['shortlyNumber']->value) {?>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current'])) {?>
									<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['resourceData']) ? $_smarty_tpl->tpl_vars['resourceData']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['current'] = $_smarty_tpl->tpl_vars['resourceData']->value['max']+$_smarty_tpl->tpl_vars['resourceData']->value['used'];
$_smarty_tpl->_assignInScope('resourceData', $_tmp_array ,true);
?>
									<td class="res_current tooltip" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
"><span<?php if ($_smarty_tpl->tpl_vars['resourceData']->value['current'] < 0) {?> style="color:red"<?php }?>><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</span></td>
									<?php } else { ?>
									<td class="res_current tooltip" id="current_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['current'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
</td>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current']) || !isset($_smarty_tpl->tpl_vars['resourceData']->value['max'])) {?>
									<td>&nbsp;</td>
									<?php } else { ?>
									<td class="res_max tooltip" id="max_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['max'];?>
" data-tooltip-content="<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
"><?php echo shortly_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</td>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<?php } else { ?>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current'])) {?>
									<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['resourceData']) ? $_smarty_tpl->tpl_vars['resourceData']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['current'] = $_smarty_tpl->tpl_vars['resourceData']->value['max']+$_smarty_tpl->tpl_vars['resourceData']->value['used'];
$_smarty_tpl->_assignInScope('resourceData', $_tmp_array ,true);
?>
									<td class="res_current"><span<?php if ($_smarty_tpl->tpl_vars['resourceData']->value['current'] < 0) {?> style="color:red"<?php }?>><?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
&nbsp;/&nbsp;<?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</span></td>
									<?php } else { ?>
									<td class="res_current" id="current_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['current'];?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
</td>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
									<?php if (!isset($_smarty_tpl->tpl_vars['resourceData']->value['current']) || !isset($_smarty_tpl->tpl_vars['resourceData']->value['max'])) {?>
									<td>&nbsp;</td>
									<?php } else { ?>
									<td class="res_max" id="max_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
" data-real="<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['current'];?>
"><?php echo pretty_number($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
</td>
									<?php }?>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

								</tr>
								<?php }?>
							</tbody>
						</table>
					</td>
				</tr>
			</tbody>
		</table>
		<?php if (!$_smarty_tpl->tpl_vars['vmode']->value) {?>
		<script type="text/javascript">
		var viewShortlyNumber	= <?php echo json_encode($_smarty_tpl->tpl_vars['shortlyNumber']->value);?>
;
		var vacation			= <?php echo $_smarty_tpl->tpl_vars['vmode']->value;?>
;
        $(function() {
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['resourceTable']->value, 'resourceData', false, 'resourceID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['resourceID']->value => $_smarty_tpl->tpl_vars['resourceData']->value) {
?>
		<?php if (isset($_smarty_tpl->tpl_vars['resourceData']->value['production'])) {?>
            resourceTicker({
                available: <?php echo json_encode($_smarty_tpl->tpl_vars['resourceData']->value['current']);?>
,
                limit: [0, <?php echo json_encode($_smarty_tpl->tpl_vars['resourceData']->value['max']);?>
],
                production: <?php echo json_encode($_smarty_tpl->tpl_vars['resourceData']->value['production']);?>
,
                valueElem: "current_<?php echo $_smarty_tpl->tpl_vars['resourceData']->value['name'];?>
"
            }, true);
		<?php }?>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        });
		</script>
        <script src="scripts/game/topnav.js"></script>
        <?php if ($_smarty_tpl->tpl_vars['hasGate']->value) {?><script src="scripts/game/gate.js"></script><?php }?>
		<?php }?>
	</div>
	<?php if ($_smarty_tpl->tpl_vars['closed']->value) {?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_closed'];?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['delete']->value) {?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['delete']->value;?>
</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['vacation']->value) {?>
	<div class="infobox"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tn_vacation_mode'];?>
 <?php echo $_smarty_tpl->tpl_vars['vacation']->value;?>
</div>
	<?php }?>
<div id="content">
<table class="table519">
	<tr>
		<th colspan="3"><a href="#" onclick="return Dialog.PlanetAction();" title="重命名或者删除"><?php echo $_smarty_tpl->tpl_vars['LNG']->value["type_planet_".((string)$_smarty_tpl->tpl_vars['planet_type']->value)];?>
 "<span class="planetname"><?php echo $_smarty_tpl->tpl_vars['planetname']->value;?>
</span>"</a> (<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
)</th>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['messages']->value) {?>
	<tr>
		<td colspan="3"><a href="?page=messages"><?php echo $_smarty_tpl->tpl_vars['messages']->value;?>
</a></td>
	</tr>
	<?php }?>
	<tr>
		<td>星际时间</td>
		<td colspan="2" class="servertime"><?php echo $_smarty_tpl->tpl_vars['servertime']->value;?>
</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['is_news']->value) {?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_news'];?>
</td><td colspan="2"><?php echo $_smarty_tpl->tpl_vars['news']->value;?>
</td>
	</tr>
	<?php }?>
	<tr>
		<td style="white-space: nowrap;">在线管理员</td>
		<td colspan="2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AdminsOnline']->value, 'Name', false, 'ID');
$_smarty_tpl->tpl_vars['Name']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['Name']->value) {
$_smarty_tpl->tpl_vars['Name']->index++;
$_smarty_tpl->tpl_vars['Name']->first = !$_smarty_tpl->tpl_vars['Name']->index;
$__foreach_Name_0_saved = $_smarty_tpl->tpl_vars['Name'];
if (!$_smarty_tpl->tpl_vars['Name']->first) {?>&nbsp;&bull;&nbsp;<?php }?><a href="#" onclick="return Dialog.PM(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</a><?php
$_smarty_tpl->tpl_vars['Name'] = $__foreach_Name_0_saved;
}
} else {
echo $_smarty_tpl->tpl_vars['LNG']->value['ov_no_admins_online'];
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</td>
	</tr>
	<?php if (!empty($_smarty_tpl->tpl_vars['chatOnline']->value)) {?>
	<tr>
		<td style="white-space: nowrap;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_chat_online'];?>
</td>
		<td colspan="2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chatOnline']->value, 'Name');
$_smarty_tpl->tpl_vars['Name']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Name']->value) {
$_smarty_tpl->tpl_vars['Name']->index++;
$_smarty_tpl->tpl_vars['Name']->first = !$_smarty_tpl->tpl_vars['Name']->index;
$__foreach_Name_1_saved = $_smarty_tpl->tpl_vars['Name'];
if (!$_smarty_tpl->tpl_vars['Name']->first) {?>,&nbsp;<?php }?><a href="?page=chat"><?php echo $_smarty_tpl->tpl_vars['Name']->value;?>
</a><?php
$_smarty_tpl->tpl_vars['Name'] = $__foreach_Name_1_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</td>
	</tr>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['teamspeakData']->value !== false) {?>
	<tr>
		<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_teamspeak'];?>
</td>
		<td colspan="3"><?php if ($_smarty_tpl->tpl_vars['teamspeakData']->value['error']) {
echo $_smarty_tpl->tpl_vars['teamspeakData']->value['error'];
} else { ?><a href="<?php echo $_smarty_tpl->tpl_vars['teamspeakData']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_teamspeak_connect'];?>
</a> &bull; <?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_teamspeak_online'];?>
: <?php echo $_smarty_tpl->tpl_vars['teamspeakData']->value['current'];?>
/<?php echo $_smarty_tpl->tpl_vars['teamspeakData']->value['max'];
}?></td>
	</tr>
	<?php }?>
	<tr>
		<th colspan="3">动态</th>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['fleets']->value, 'fleet', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['fleet']->value) {
?>
	<tr>
		<td id="fleettime_<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="fleets" data-fleet-end-time="<?php echo $_smarty_tpl->tpl_vars['fleet']->value['returntime'];?>
" data-fleet-time="<?php echo $_smarty_tpl->tpl_vars['fleet']->value['resttime'];?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['fleet']->value['resttime'];
$_prefixVariable1=ob_get_clean();
echo pretty_fly_time($_prefixVariable1);?>
</td>
		<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['fleet']->value['text'];?>
</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<tr>
		<td><?php if ($_smarty_tpl->tpl_vars['Moon']->value) {?><a href="game.php?page=overview&amp;cp=<?php echo $_smarty_tpl->tpl_vars['Moon']->value['id'];?>
&amp;re=0" title="<?php echo $_smarty_tpl->tpl_vars['Moon']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/mond.jpg" height="50" width="50" alt="<?php echo $_smarty_tpl->tpl_vars['Moon']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_moon'];?>
)"></a><br><?php echo $_smarty_tpl->tpl_vars['Moon']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fcm_moon'];?>
)<?php } else { ?>&nbsp;<?php }?></td>
		<td>
			<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/<?php echo $_smarty_tpl->tpl_vars['planetimage']->value;?>
.jpg" height="200" width="200" alt="<?php echo $_smarty_tpl->tpl_vars['planetname']->value;?>
">
			<br><?php if ($_smarty_tpl->tpl_vars['buildInfo']->value['buildings']) {
echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['buildInfo']->value['buildings']['id']];?>
 (<?php echo $_smarty_tpl->tpl_vars['buildInfo']->value['buildings']['level'];?>
)<br><div class="timer" data-time="<?php echo $_smarty_tpl->tpl_vars['buildInfo']->value['buildings']['timeleft'];?>
"><?php echo $_smarty_tpl->tpl_vars['buildInfo']->value['buildings']['starttime'];?>
</div><?php } else {
echo $_smarty_tpl->tpl_vars['LNG']->value['ov_free'];
}?>
		</td>
		<td>
		<?php if ($_smarty_tpl->tpl_vars['AllPlanets']->value) {?>
		<table id="planetList">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['AllPlanets']->value, 'PlanetRow', true);
$_smarty_tpl->tpl_vars['PlanetRow']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PlanetRow']->value) {
$_smarty_tpl->tpl_vars['PlanetRow']->iteration++;
$_smarty_tpl->tpl_vars['PlanetRow']->last = $_smarty_tpl->tpl_vars['PlanetRow']->iteration == $_smarty_tpl->tpl_vars['PlanetRow']->total;
$__foreach_PlanetRow_3_saved = $_smarty_tpl->tpl_vars['PlanetRow'];
?>
			<?php if (($_smarty_tpl->tpl_vars['PlanetRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW']) === 1) {?><tr style="height:20px;"><?php }?>
			<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['name'];?>
<br><a href="game.php?page=overview&amp;cp=<?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['name'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
planeten/small/s_<?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['image'];?>
.jpg" alt="<?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['name'];?>
"></a><br><?php echo $_smarty_tpl->tpl_vars['PlanetRow']->value['build'];?>
</td>
			<?php if ($_smarty_tpl->tpl_vars['PlanetRow']->last && $_smarty_tpl->tpl_vars['PlanetRow']->total > 1 && ($_smarty_tpl->tpl_vars['PlanetRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW']) !== 0) {?>
			<?php $_smarty_tpl->_assignInScope('to', $_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW']-($_smarty_tpl->tpl_vars['PlanetRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW']) ,true);
?>
			<?php
$_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['foo']->step = 1;$_smarty_tpl->tpl_vars['foo']->total = (int) ceil(($_smarty_tpl->tpl_vars['foo']->step > 0 ? $_smarty_tpl->tpl_vars['to']->value+1 - (1) : 1-($_smarty_tpl->tpl_vars['to']->value)+1)/abs($_smarty_tpl->tpl_vars['foo']->step));
if ($_smarty_tpl->tpl_vars['foo']->total > 0) {
for ($_smarty_tpl->tpl_vars['foo']->value = 1, $_smarty_tpl->tpl_vars['foo']->iteration = 1;$_smarty_tpl->tpl_vars['foo']->iteration <= $_smarty_tpl->tpl_vars['foo']->total;$_smarty_tpl->tpl_vars['foo']->value += $_smarty_tpl->tpl_vars['foo']->step, $_smarty_tpl->tpl_vars['foo']->iteration++) {
$_smarty_tpl->tpl_vars['foo']->first = $_smarty_tpl->tpl_vars['foo']->iteration == 1;$_smarty_tpl->tpl_vars['foo']->last = $_smarty_tpl->tpl_vars['foo']->iteration == $_smarty_tpl->tpl_vars['foo']->total;?>
			<td class="transparent">&nbsp;</td>
			<?php }
}
?>

			<?php }?>
			<?php if (($_smarty_tpl->tpl_vars['PlanetRow']->iteration%$_smarty_tpl->tpl_vars['themeSettings']->value['PLANET_ROWS_ON_OVERVIEW']) === 0) {?></tr><?php }?>
			<?php
$_smarty_tpl->tpl_vars['PlanetRow'] = $__foreach_PlanetRow_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

		</table>
		<?php } else { ?>&nbsp;<?php }?>
		</td>
	</tr>
	<tr>
		<td>直径</td>
		<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['planet_diameter']->value;?>
 km (<a title="已用面积"><?php echo $_smarty_tpl->tpl_vars['planet_field_current']->value;?>
</a> / <a title="最大允许面积"><?php echo $_smarty_tpl->tpl_vars['planet_field_max']->value;?>
</a> )</td>
	</tr>
	<tr>
		<td>温度</td>
		<td colspan="2">约 <?php echo $_smarty_tpl->tpl_vars['planet_temp_min']->value;?>
°C ~ <?php echo $_smarty_tpl->tpl_vars['planet_temp_max']->value;?>
°C</td>
	</tr>
	<tr>
		<td>坐标</td>
		<td colspan="2"><a href="game.php?page=galaxy&amp;galaxy=<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
&amp;system=<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
">[<?php echo $_smarty_tpl->tpl_vars['galaxy']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['system']->value;?>
:<?php echo $_smarty_tpl->tpl_vars['planet']->value;?>
]</a></td>
	</tr>
	<tr>
		<td>积分</td>
		<td colspan="2"><?php echo $_smarty_tpl->tpl_vars['rankInfo']->value;?>
</td>
	</tr>
	<?php if ($_smarty_tpl->tpl_vars['ref_active']->value) {?>
	<tr>
		<th colspan="3"><label for="referral"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_reflink'];?>
</label></th>
	</tr>
	<tr>
		<td colspan="3"><input id="referral" type="text" value="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
index.php?ref=<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
" readonly="readonly" style="width:450px;" /></td>
	</tr>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RefLinks']->value, 'RefLink', false, 'RefID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RefID']->value => $_smarty_tpl->tpl_vars['RefLink']->value) {
?>
	<tr>
		<td colspan="2"><a href="#" onclick="return Dialog.Playercard(<?php echo $_smarty_tpl->tpl_vars['RefID']->value;?>
, '<?php echo $_smarty_tpl->tpl_vars['RefLink']->value['username'];?>
');"><?php echo $_smarty_tpl->tpl_vars['RefLink']->value['username'];?>
</a></td>
		<td><?php ob_start();
echo pretty_number($_smarty_tpl->tpl_vars['RefLink']->value['points']);
$_prefixVariable2=ob_get_clean();
echo $_prefixVariable2;?>
 / <?php echo pretty_number($_smarty_tpl->tpl_vars['ref_minpoints']->value);?>
</td>
	</tr>
	<?php
}
} else {
?>

	<tr>
		<td colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['ov_noreflink'];?>
</td>
	</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	<?php }?>
</table>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cronjobs']->value, 'cronjob');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['cronjob']->value) {
?><img src="cronjob.php?cronjobID=<?php echo $_smarty_tpl->tpl_vars['cronjob']->value;?>
" alt=""><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

<?php $_smarty_tpl->_subTemplateRender("file:main.footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
