{include file="main.header.tpl" bodyclass="full"}
{if $hasAdminAccess}
<div class="globalWarning">
{$LNG.admin_access_1} <a id="drop-admin">{$LNG.admin_access_link}</a>{$LNG.admin_access_2}
</div>
{/if}
<li class="menu-head"></li>
{include file="main.topnav.tpl"}
{include file="main.navigation.tpl"}
<div id="content">{block name="content"}{/block}</div>
{foreach $cronjobs as $cronjob}<img src="cronjob.php?cronjobID={$cronjob}" alt="">{/foreach}
{include file="main.footer.tpl" nocache}
