<?php /* Smarty version Smarty-3.1.8, created on 2012-03-30 14:22:27
         compiled from ".\templates\clientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48074f75a5837a8f54-10606378%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ad217df7baaa9d516389ddcb7cb703faaa6f4f0' => 
    array (
      0 => '.\\templates\\clientes.tpl',
      1 => 1333110127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48074f75a5837a8f54-10606378',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'patron' => 1,
    'datos' => 1,
    'registro' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f75a5837e46f6_35274860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f75a5837e46f6_35274860')) {function content_4f75a5837e46f6_35274860($_smarty_tpl) {?>
<a href='index.php?module=clientes&action=add'>Add</a><br />
<form action="index.php?module=clientes&action=listado" method="post">
	<label for="patron">Buscar:</label>
	<input type="text" name="patron" id="patron"
	value="<?php echo $_smarty_tpl->tpl_vars['patron']->value;?>
"
	/>
	<input type="submit" name="submit" id="submit" 
	value="Buscar" />
</form>
<br/>

<table>
	<?php  $_smarty_tpl->tpl_vars['registro'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['registro']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['datos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['registro']->key => $_smarty_tpl->tpl_vars['registro']->value){
$_smarty_tpl->tpl_vars['registro']->_loop = true;
?>
			<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['nombre'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['cif'];?>
</td>
			<td>
			<a href='index.php?module=clientes&action=show&id=<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
'>Mostrar</a><br/>
			<a href='index.php?module=clientes&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
'>Editar</a><br/>
			<a href='index.php?module=clientes&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
'>Borrar</a><br/>
			</td>
			</tr>
	<?php } ?>
</table>
<?php }} ?>