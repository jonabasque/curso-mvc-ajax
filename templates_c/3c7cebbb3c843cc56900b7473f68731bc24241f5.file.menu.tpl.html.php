<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 14:17:36
         compiled from ".\templates\menu.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:274454f7998e068cfe1-76026005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c7cebbb3c843cc56900b7473f68731bc24241f5' => 
    array (
      0 => '.\\templates\\menu.tpl.html',
      1 => 1333358005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274454f7998e068cfe1-76026005',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7998e068f1a3_66108059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7998e068f1a3_66108059')) {function content_4f7998e068f1a3_66108059($_smarty_tpl) {?><div id="menu">
	<h2>Menú principal</h2>
    	<ol>
	    	<li><a href="index.php">Inicio</a></li>
	    	<li><a href="index.php?module=usuarios&action=login">Login</a></li>
	    	<li><a href="index.php?module=clientes">Clientes</a></li>
	    	<li><a href="index.php?module=usuarios">Usuarios</a></li>
	    	<li><a href="index.php?module=socios">Socios</a></li>
    	</ol>
</div><?php }} ?>