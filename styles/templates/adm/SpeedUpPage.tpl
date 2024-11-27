{include file="overall_header.tpl"}
<form method="post" action="">
	<table width="80%" border="0" cellpadding="1">
		<tr>
			<th colspan="2">{$su_title}</th>
		</tr>
		<tr>
			<td>{$su_second}</td>
			<td><input type="text" name="speed_up_seconds" value="{$su_default_value}">{$su_unit}</td>
		</tr>

		<tr>
			<td colspan="2"><input type="submit" value="{$cs_save_changes}"></td>
		</tr>
	</table>
</form>
{include file="overall_footer.tpl"}