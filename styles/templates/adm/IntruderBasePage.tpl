{include file="overall_header.tpl"}
<form method="post" action="">
	<table width="80%" border="0" cellpadding="1">
		<tr>
			<th colspan="2">{$ib_title}</th>
		</tr>
		<tr>
			<td>{$ib_create_intruder_count}</td>
			<td><input type="text" name="intruder_count" value="1"></td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" value="{$ib_create}"></td>
		</tr>
	</table>
</form>
{include file="overall_footer.tpl"}