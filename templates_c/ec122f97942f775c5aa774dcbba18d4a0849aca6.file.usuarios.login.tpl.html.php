<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 11:29:33
         compiled from ".\templates\usuarios.login.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:222634f79717da22dd3-32478686%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec122f97942f775c5aa774dcbba18d4a0849aca6' => 
    array (
      0 => '.\\templates\\usuarios.login.tpl.html',
      1 => 1333357952,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '222634f79717da22dd3-32478686',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f79717da2dcf7_68415183',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f79717da2dcf7_68415183')) {function content_4f79717da2dcf7_68415183($_smarty_tpl) {?><form id="login" name="login" 
		action="index.php?module=usuarios&action=login" method="post">
	<label for="data[username]">Nombre de usuario</label>
	<input type="text" id="username" tabindex="1" 
	name="data[username]" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['username'];?>
"/><br />
	<label for="data[password]">password</label>
	<input type="password" id="password" tabindex="2" 
	name="data[password]" value=""/><br />
	<input 
	type="submit" name="data[submit]" 
	id="submit" value="Enviar"/><br />
</form>
<br/>
<a href="index.php?module=usuarios&action=listado">Volver</a><?php }} ?>