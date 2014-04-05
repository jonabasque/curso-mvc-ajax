<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 11:17:11
         compiled from ".\templates\clientes.add.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:281064f7ac0173ce343-60056317%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7c8af169c0dbeaac62eefcf7944d27bbb8bef204' => 
    array (
      0 => '.\\templates\\clientes.add.tpl.html',
      1 => 1333352969,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '281064f7ac0173ce343-60056317',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7ac0173dc544_32622738',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7ac0173dc544_32622738')) {function content_4f7ac0173dc544_32622738($_smarty_tpl) {?><form id="add" name="add" 
		action="index.php?module=clientes&action=add" method="post">
	<label for="data[nombre]">Nombre de Cliente</label>
	<input type="text" id="nombre" tabindex="1" 
	name="data[nombre]" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['nombre'];?>
"/><br />
	<label for="data[cif]">CIF</label>
	<input type="text" id="cif" tabindex="2" 
	name="data[cif]" value="<?php echo $_smarty_tpl->tpl_vars['datos']->value['cif'];?>
"/><br />
	<input 
	type="submit" name="data[submit]" 
	id="submit" value="Enviar"/><br />
</form>
<br/>
<a href="index.php?module=clientes&action=listado">Volver</a><?php }} ?>