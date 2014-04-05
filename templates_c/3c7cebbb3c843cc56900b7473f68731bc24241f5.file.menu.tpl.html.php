<?php /* Smarty version Smarty-3.1.8, created on 2012-04-18 11:31:18
         compiled from ".\templates\menu.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:301064f8e89e655b423-53945216%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c7cebbb3c843cc56900b7473f68731bc24241f5' => 
    array (
      0 => '.\\templates\\menu.tpl.html',
      1 => 1334741381,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '301064f8e89e655b423-53945216',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8e89e6561556_06361914',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8e89e6561556_06361914')) {function content_4f8e89e6561556_06361914($_smarty_tpl) {?><div id="menu">
	<h2>Menú principal</h2>
    	<ol>
	    	<li><a href="index.php">Inicio</a></li>
	    	<li><a id="enlaceclientes" href="index.php?module=clientes&action=listado">Clientes</a></li>
    	</ol>
</div>
<script>
$(document).ready(function(){
	$("#enlaceclientes").click(function(evento){
		evento.preventDefault();
		$("#contenido").load("index.php?module=clientes&action=listado&output=htmlp", function(data){
			
		});
	});
});
</script><?php }} ?>