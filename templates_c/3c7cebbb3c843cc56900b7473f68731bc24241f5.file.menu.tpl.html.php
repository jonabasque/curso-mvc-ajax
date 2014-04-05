<?php /* Smarty version Smarty-3.1.8, created on 2012-04-18 14:38:47
         compiled from ".\templates\menu.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:270284f8eb5d71f94a0-53902952%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c7cebbb3c843cc56900b7473f68731bc24241f5' => 
    array (
      0 => '.\\templates\\menu.tpl.html',
      1 => 1334744601,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270284f8eb5d71f94a0-53902952',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8eb5d7202253_90423318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8eb5d7202253_90423318')) {function content_4f8eb5d7202253_90423318($_smarty_tpl) {?><div id="menu">
	<h2>Menú principal</h2>
    	<ol>
	    	<li><a id="enlaceindex" href="index.php">Inicio</a></li>
	    	<li><a id="enlaceclientes" href="index.php?module=clientes&action=listado">Clientes</a></li>
    	</ol>
</div>
<script>
$(document).ready(function(){
	$("#enlaceindex").click(function(evento){
		evento.preventDefault();
		$("#contenido").load("index.php?module=main&output=htmlp", function(data){
			
		});
	});
	$("#enlaceclientes").click(function(evento){
		evento.preventDefault();
		$("#contenido").load("index.php?module=clientes&action=listado&output=htmlp", function(data){
			
		});
	});
});
</script><?php }} ?>