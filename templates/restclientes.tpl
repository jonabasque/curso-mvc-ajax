{if $action eq "listado"}
	{include file="clientes.listado.tpl.html"}
{elseif $action eq "add"}
	{include file="clientes.add.tpl.html"}
{elseif $action eq "show"}
	{include file="clientes.show.tpl.html"}
{elseif $action eq "delete"}
	{include file="clientes.show.tpl.html"}
{elseif $action eq "edit"}
	{include file="clientes.edit.tpl.html"}
{else}
	{include file="clientes.listado.tpl.html"}
{/if}