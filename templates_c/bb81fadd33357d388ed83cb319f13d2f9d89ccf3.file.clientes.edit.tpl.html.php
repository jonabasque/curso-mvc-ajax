<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 11:17:18
         compiled from ".\templates\clientes.edit.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:36284f7ac01ea3eb98-27033996%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb81fadd33357d388ed83cb319f13d2f9d89ccf3' => 
    array (
      0 => '.\\templates\\clientes.edit.tpl.html',
      1 => 1333355042,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36284f7ac01ea3eb98-27033996',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7ac01ea58e38_78502817',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7ac01ea58e38_78502817')) {function content_4f7ac01ea58e38_78502817($_smarty_tpl) {?><form id="edit" name="edit" 
		action="index.php?module=clientes&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
" method="post">
	<label for="data[nombre]">Nombre de Cliente</label>
	<input type="text" id="nombre" tabindex="1" 
	name="data[nombre]" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
"/><br />
	<label for="data[cif]">CIF</label>
	<input type="text" id="cif" tabindex="2" 
	name="data[cif]" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['cif'];?>
"/><br />
	<input type="hidden" name="data[id]" 
	value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['id'];?>
"/>
	<input 
	type="submit" name="data[submit]" 
	id="submit" value="Enviar"/><br />
</form>
<br/>
<a href="index.php?module=clientes&action=listado">Volver</a><?php }} ?>