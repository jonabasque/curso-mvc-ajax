<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 11:42:41
         compiled from ".\templates\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:222294f797491e74df6-38349660%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85192c6e9f55456bef8cf932502504a0684ee09b' => 
    array (
      0 => '.\\templates\\menu.tpl',
      1 => 1333358005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222294f797491e74df6-38349660',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f797491e76ed8_47886333',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f797491e76ed8_47886333')) {function content_4f797491e76ed8_47886333($_smarty_tpl) {?><div id="menu">
	<h2>Menú principal</h2>
    	<ol>
	    	<li><a href="index.php">Inicio</a></li>
	    	<li><a href="index.php?module=usuarios&action=login">Login</a></li>
	    	<li><a href="index.php?module=clientes">Clientes</a></li>
	    	<li><a href="index.php?module=usuarios">Usuarios</a></li>
	    	<li><a href="index.php?module=socios">Socios</a></li>
    	</ol>
</div><?php }} ?>