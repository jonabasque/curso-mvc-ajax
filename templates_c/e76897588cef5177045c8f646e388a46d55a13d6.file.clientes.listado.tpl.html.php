<?php /* Smarty version Smarty-3.1.8, created on 2012-04-18 11:31:19
         compiled from ".\templates\clientes.listado.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:187844f8e89e74b6839-13791044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e76897588cef5177045c8f646e388a46d55a13d6' => 
    array (
      0 => '.\\templates\\clientes.listado.tpl.html',
      1 => 1333354195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187844f8e89e74b6839-13791044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 0,
    'patron' => 1,
    'datos' => 1,
    'registro' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8e89e7506d62_28341855',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8e89e7506d62_28341855')) {function content_4f8e89e7506d62_28341855($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)&&$_smarty_tpl->tpl_vars['mensaje']->value!=null){?>
<div id="mensaje">
<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

</div>
<?php }?>

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
</table><?php }} ?>