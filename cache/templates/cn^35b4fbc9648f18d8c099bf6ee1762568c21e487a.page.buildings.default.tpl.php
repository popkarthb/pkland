<?php
/* Smarty version 3.1.30, created on 2022-12-13 12:12:35
  from "/app/styles/templates/game/page.buildings.default.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_63986c3325d8d7_33034244',
  'has_nocache_code' => true,
  'file_dependency' => 
  array (
    'ddcec2dbc3b84dd3d2cf0c9f994290d94de240df' => 
    array (
      0 => '/app/styles/templates/game/page.buildings.default.tpl',
      1 => 1661645450,
      2 => 'extends',
    ),
    '153d30485dee6e29f881b5119948e22b4333382e' => 
    array (
      0 => '/app/styles/templates/game/page.buildings.default.tpl',
      1 => 1661645450,
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
function content_63986c3325d8d7_33034244 (Smarty_Internal_Template $_smarty_tpl) {
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
	<title>???????????? - <?php echo $_smarty_tpl->tpl_vars['uni_name']->value;?>
 - ????????????</title>
	<meta name="generator" content="2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
">
	<!-- 
		This website is powered by 2Moons <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

		2Moons is a free Space Browsergame initially created by Jan Kr??pke and licensed under GNU/GPL.
		2Moons is copyright 2009-2013 of Jan Kr??pke. Extensions are copyright of their respective owners.
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
	var Ready		= "??????";
	var Skin		= "<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
";
	var Lang		= "<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
";
	var head_info	= "??????";
	var auth		= <?php echo (($tmp = @$_smarty_tpl->tpl_vars['authlevel']->value)===null||$tmp==='' ? '0' : $tmp);?>
;
	var days 		= ["\u661f\u671f\u65e5","\u661f\u671f\u4e00","\u661f\u671f\u4e8c","\u661f\u671f\u4e09","\u661f\u671f\u56db","\u661f\u671f\u4e94","\u661f\u671f\u516d"] 
	var months 		= ["1\u6708","2\u6708","3\u6708","4\u6708","5\u6708","6\u6708","7\u6708","8\u6708","9\u6708","10\u6708","11\u6708","12\u6708"] ;
	var tdformat	= "[Y]???[M][d]??? [H]:[i]:[s]";
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

	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="buildings" class="<?php echo $_smarty_tpl->tpl_vars['bodyclass']->value;?>
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
		<li class="menu-head"><a href="game.php?page=changelog">????????????</a></li>
		<li class="menucat1-head"></li>
		<li><a href="game.php?page=overview">????????????</a></li>
		<li><a href="game.php?page=imperium">????????????</a></li>		<li><a href="game.php?page=research">????????????</a></li>		<li><a href="game.php?page=buildings">????????????</a></li>		<li><a href="game.php?page=shipyard&amp;mode=fleet">????????????</a></li>		<li><a href="game.php?page=shipyard&amp;mode=defense">????????????</a></li>		<li><a href="game.php?page=officier">????????????</a></li>		<li><a href="game.php?page=trader">????????????</a></li>		<li><a href="game.php?page=fleetDealer">??????</a></li>		<li><a href="game.php?page=fleetTable">????????????</a></li>		<li><a href="game.php?page=techtree">?????????</a></li>		<li><a href="game.php?page=resources">????????????</a></li>		<li class="menucat2-head"></li>
		<li><a href="game.php?page=galaxy">??????</a></li>		<li><a href="game.php?page=alliance">??????</a></li>        <?php if (!empty($_smarty_tpl->tpl_vars['hasBoard']->value)) {?><li><a href="game.php?page=board" target="forum"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_forums'];?>
</a></li><?php }?>
		<li><a href="game.php?page=statistics">??????</a></li>		<li><a href="game.php?page=records">????????????</a></li>		<li><a href="game.php?page=battleHall">??????</a></li>		<li><a href="game.php?page=search">??????</a></li>		<li><a href="game.php?page=chat">??????</a></li>		<li><a href="game.php?page=ticket">??????</a></li>		<li><a href="game.php?page=questions">????????????</a></li>
		<li><a href="game.php?page=banList">??????</a></li>		<li><a href="index.php?page=rules" target="rules">??????</a></li>
		<li><a href="game.php?page=battleSimulator">???????????????</a></li>
		<li class="menucat3-head"></li>
		<li><a href="game.php?page=messages">??????<?php if ($_smarty_tpl->tpl_vars['new_message']->value > 0) {?><span id="newmes"> (<span id="newmesnum"><?php echo $_smarty_tpl->tpl_vars['new_message']->value;?>
</span>)</span><?php }?></a></li>		<li><a href="javascript:OpenPopup('?page=notes', 'notes', 720, 300);">??????</a></li>		<li><a href="game.php?page=buddyList">??????</a></li>		<li><a href="game.php?page=settings">??????</a></li>
		<li><a href="game.php?page=logout">??????</a></li>
		<?php if ($_smarty_tpl->tpl_vars['authlevel']->value > 0) {?><li><a href="./admin.php" style="color:lime"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['lm_administration'];?>
 (<?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>
)</a></li><?php }?>
		<li class="menu-footer"></li>
	</ul>
	<div id="disclamer"><a href="index.php?page=disclamer" target="_blank">????????????</a></div>
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
<?php if (!empty($_smarty_tpl->tpl_vars['Queue']->value)) {?>
<div id="buildlist" class="buildlist">
	<table style="width:760px">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Queue']->value, 'List');
$_smarty_tpl->tpl_vars['List']->iteration = 0;
$_smarty_tpl->tpl_vars['List']->index = -1;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['List']->value) {
$_smarty_tpl->tpl_vars['List']->iteration++;
$_smarty_tpl->tpl_vars['List']->index++;
$_smarty_tpl->tpl_vars['List']->first = !$_smarty_tpl->tpl_vars['List']->index;
$__foreach_List_0_saved = $_smarty_tpl->tpl_vars['List'];
?>
		<?php $_smarty_tpl->_assignInScope('ID', $_smarty_tpl->tpl_vars['List']->value['element'] ,true);
?>
		<tr>
			<td style="width:70%;vertical-align:top;" class="left">
				<?php echo $_smarty_tpl->tpl_vars['List']->iteration;?>
.: 
				<?php if (!($_smarty_tpl->tpl_vars['isBusy']->value['research'] && ($_smarty_tpl->tpl_vars['ID']->value == 6 || $_smarty_tpl->tpl_vars['ID']->value == 31)) && !($_smarty_tpl->tpl_vars['isBusy']->value['shipyard'] && ($_smarty_tpl->tpl_vars['ID']->value == 15 || $_smarty_tpl->tpl_vars['ID']->value == 21)) && $_smarty_tpl->tpl_vars['RoomIsOk']->value && $_smarty_tpl->tpl_vars['CanBuildElement']->value && $_smarty_tpl->tpl_vars['BuildInfoList']->value[$_smarty_tpl->tpl_vars['ID']->value]['buyable']) {?>
				<form class="build_form" action="game.php?page=buildings" method="post">
					<input type="hidden" name="cmd" value="insert">
					<input type="hidden" name="building" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['List']->value['level'];
if ($_smarty_tpl->tpl_vars['List']->value['destroy']) {?> <?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];
}?></button>
				</form>
				<?php } else {
echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['List']->value['level'];?>
 <?php if ($_smarty_tpl->tpl_vars['List']->value['destroy']) {
echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];
}
}?>
				<?php if ($_smarty_tpl->tpl_vars['List']->first) {?>
				<br><br><div id="progressbar" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['resttime'];?>
"></div>
			</td>
			<td>
				<div id="time" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['time'];?>
"><br></div>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="cancel">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_cancel'];?>
</button>
				</form>
				<?php } else { ?>
			</td>
			<td>
				<form action="game.php?page=buildings" method="post" class="build_form">
					<input type="hidden" name="cmd" value="remove">
					<input type="hidden" name="listid" value="<?php echo $_smarty_tpl->tpl_vars['List']->iteration;?>
">
					<button type="submit" class="build_submit onlist"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_cancel'];?>
</button>
				</form>
				<?php }?>
				<br><span style="color:lime" data-time="<?php echo $_smarty_tpl->tpl_vars['List']->value['endtime'];?>
" class="timer"><?php echo $_smarty_tpl->tpl_vars['List']->value['display'];?>
</span>
			</td>
		</tr>
	<?php
$_smarty_tpl->tpl_vars['List'] = $__foreach_List_0_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</table>
</div>
<?php }?>
<table style="width:760px">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BuildInfoList']->value, 'Element', false, 'ID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ID']->value => $_smarty_tpl->tpl_vars['Element']->value) {
?>
	<tr>
		<td rowspan="2" style="width:120px;">
			<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)">
				<img src="<?php echo $_smarty_tpl->tpl_vars['dpath']->value;?>
gebaeude/<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
.gif" alt="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
" width="120" height="120">
			</a>
		</td>
		<th>
			<a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
</a><?php if ($_smarty_tpl->tpl_vars['Element']->value['level'] > 0) {?> (<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_lvl'];?>
 <?php echo $_smarty_tpl->tpl_vars['Element']->value['level'];
if ($_smarty_tpl->tpl_vars['Element']->value['maxLevel'] != 255) {?>/<?php echo $_smarty_tpl->tpl_vars['Element']->value['maxLevel'];
}?>)<?php }?>
		</th>
	</tr>
	<tr>
		<td>
			<table style="width:100%" id="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
				<tr>
					<td class="transparent left" style="width:90%;padding:10px;"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['shortDescription'][$_smarty_tpl->tpl_vars['ID']->value];?>
</p>
					<p><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Element']->value['costResources'], 'RessAmount', false, 'RessID');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RessID']->value => $_smarty_tpl->tpl_vars['RessAmount']->value) {
?>
					<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['RessID']->value];?>
: <b><span style="color:<?php if ($_smarty_tpl->tpl_vars['Element']->value['costOverflow'][$_smarty_tpl->tpl_vars['RessID']->value] == 0) {?>lime<?php } else { ?>red<?php }?>"><?php echo pretty_number($_smarty_tpl->tpl_vars['RessAmount']->value);?>
</span></b>
					<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
</p></td>
					<td class="transparent" style="vertical-align:middle;width:100px">
					<?php if ($_smarty_tpl->tpl_vars['Element']->value['maxLevel'] == $_smarty_tpl->tpl_vars['Element']->value['levelToBuild']) {?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_maxlevel'];?>
</span>
					<?php } elseif (($_smarty_tpl->tpl_vars['isBusy']->value['research'] && ($_smarty_tpl->tpl_vars['ID']->value == 6 || $_smarty_tpl->tpl_vars['ID']->value == 31)) || ($_smarty_tpl->tpl_vars['isBusy']->value['shipyard'] && ($_smarty_tpl->tpl_vars['ID']->value == 15 || $_smarty_tpl->tpl_vars['ID']->value == 21))) {?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_working'];?>
</span>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['RoomIsOk']->value) {?>
							<?php if ($_smarty_tpl->tpl_vars['CanBuildElement']->value && $_smarty_tpl->tpl_vars['Element']->value['buyable']) {?>
							<form action="game.php?page=buildings" method="post" class="build_form">
								<input type="hidden" name="cmd" value="insert">
								<input type="hidden" name="building" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
<input type="hidden" name="scrollHeight" >
								<button type="submit" class="build_submit"><?php if ($_smarty_tpl->tpl_vars['Element']->value['level'] == 0) {
echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build'];
} else {
echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build_next_level'];
echo $_smarty_tpl->tpl_vars['Element']->value['levelToBuild']+1;
}?></button>
							</form>
							<?php } else { ?>
							<span style="color:red"><?php if ($_smarty_tpl->tpl_vars['Element']->value['level'] == 0) {
echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build'];
} else {
echo $_smarty_tpl->tpl_vars['LNG']->value['bd_build_next_level'];
echo $_smarty_tpl->tpl_vars['Element']->value['levelToBuild']+1;
}?></span>
							<?php }?>
						<?php } else { ?>
						<span style="color:red"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_no_more_fields'];?>
</span>
						<?php }?>
					<?php }?>
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
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_remaining'];?>
<br>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Element']->value['costOverflow'], 'ResCount', false, 'ResType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ResType']->value => $_smarty_tpl->tpl_vars['ResCount']->value) {
?>
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ResType']->value];?>
: <span style="font-weight:700"><?php echo pretty_number($_smarty_tpl->tpl_vars['ResCount']->value);?>
</span><br>
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

						<br>
					</td>
				</tr>
				<tr>		
					<td class="transparent left" style="width:68%">
						<?php if (!empty($_smarty_tpl->tpl_vars['Element']->value['infoEnergy'])) {?>
							<?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_next_level'];?>
<br>
							<?php echo $_smarty_tpl->tpl_vars['Element']->value['infoEnergy'];?>
<br>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['Element']->value['level'] > 0) {?>
							<?php if ($_smarty_tpl->tpl_vars['ID']->value == 43) {?><a href="#" onclick="return Dialog.info(<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
)"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_jump_gate_action'];?>
</a><?php }?>
							<?php if (($_smarty_tpl->tpl_vars['ID']->value == 44 && !$_smarty_tpl->tpl_vars['HaveMissiles']->value) || $_smarty_tpl->tpl_vars['ID']->value != 44) {?><br><a class="tooltip_sticky" data-tooltip-content="
								
								<table style='width:300px'>
									<tr>
										<th colspan='2'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_price_for_destroy'];?>
 <?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ID']->value];?>
 <?php echo $_smarty_tpl->tpl_vars['Element']->value['level'];?>
</th>
									</tr>
									<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Element']->value['destroyResources'], 'ResCount', false, 'ResType');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ResType']->value => $_smarty_tpl->tpl_vars['ResCount']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['tech'][$_smarty_tpl->tpl_vars['ResType']->value];?>
</td>
										<td><span style='color:<?php if (empty($_smarty_tpl->tpl_vars['Element']->value['destroyOverflow'][$_smarty_tpl->tpl_vars['RessID']->value])) {?>lime<?php } else { ?>red<?php }?>'><?php echo pretty_number($_smarty_tpl->tpl_vars['ResCount']->value);?>
</span></td>
									</tr>
									<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_destroy_time'];?>
</td>
										<td><?php echo pretty_time($_smarty_tpl->tpl_vars['Element']->value['destroyTime']);?>
</td>
									</tr>
									<tr>
										<td colspan='2'>
											<form action='game.php?page=buildings' method='post' class='build_form'>
												<input type='hidden' name='cmd' value='destroy'>
												<input type='hidden' name='building' value='<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
'>
												<button type='submit' class='build_submit onlist'><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
</button>
											</form>
										</td>
									</tr>
								</table>
								
								"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['bd_dismantle'];?>
</a><?php }?>
						<?php } else { ?>
							&nbsp;
						<?php }?>
					</td>
					<td class="transparent right" style="white-space:nowrap;">
						<?php echo $_smarty_tpl->tpl_vars['LNG']->value['fgf_time'];?>
:<br><?php echo pretty_time($_smarty_tpl->tpl_vars['Element']->value['elementTime']);?>

					</td>
				</tr>	
			</table>
		</td>
	</tr>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<script>
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
</script>
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
