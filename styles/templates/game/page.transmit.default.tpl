{block name="title" prepend}{$LNG.lm_transmit}{/block}
{block name="content"}
<form action="game.php?page=transmit" method="post">
	<input type="hidden" name="mode" value="transport ">
	<table style="width:760px;">
        <tr>
			<th>{$LNG.tp_transmit}</th>
		</tr>
        <tr>
			<td>

				<div style="padding:15px">选择你需要传送的坐标</div>
				<div style="padding:15px">


					<input type="text" name="galaxy" style="width: 60px;"> :
					<input type="text" name="system" style="width: 60px;"> :
					<input type="text" name="planet" style="width: 60px;">


				</div>
				<input type="submit"  style="width: 60px;" value="传送">
				<div style="padding:15px">每次传送需要消耗 1000 钻石</div>
			</td>
		</tr>
	</table>
</form>
{/block}
{block name="script" append}
<script src="scripts/game/fleettrader.js"></script>
<script>
var CostInfo = {$CostInfos|json};
var Charge = {$Charge};
$(function(){
    updateVars();
});
</script>
{/block}