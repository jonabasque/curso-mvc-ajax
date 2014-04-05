{config_load file="miconfiguracion.conf" section="setup"}

{include file="header.tpl"}

<div id="contenido">

{if $modulo eq "clientes"}
	{include file="clientes.tpl.html"}
{elseif $modulo eq "usuarios"}
	{include file="usuarios.tpl.html"}
{elseif $modulo eq "socios"}
	{include file="socios.tpl"}
{else}
	{include file="main.tpl"}
{/if}

</div>


{include file="footer.tpl"}
