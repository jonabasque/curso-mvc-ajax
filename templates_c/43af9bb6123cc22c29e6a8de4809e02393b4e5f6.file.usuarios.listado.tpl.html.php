<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 14:02:23
         compiled from ".\templates\usuarios.listado.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:259094f79954f3efaa3-27765856%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43af9bb6123cc22c29e6a8de4809e02393b4e5f6' => 
    array (
      0 => '.\\templates\\usuarios.listado.tpl.html',
      1 => 1333365231,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259094f79954f3efaa3-27765856',
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
  'unifunc' => 'content_4f79954f43fa61_51413377',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f79954f43fa61_51413377')) {function content_4f79954f43fa61_51413377($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)&&$_smarty_tpl->tpl_vars['mensaje']->value!=null){?>
<div id="mensaje">
<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

</div>
<?php }?>
<a href='index.php?module=usuarios&action=register'>Registrar</a><br />
		<form action="index.php?module=usuarios&action=listado" method="post">
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
			<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['username'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['registro']->value['email'];?>
</td>
			<td>
			<a href='index.php?module=usuarios&action=show&id=<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
'>Mostrar</a>
			<br/>
			<a href='index.php?module=usuarios&action=edit&id=<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
'>Editar</a>
			<br/>
			<a href='index.php?module=usuarios&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['registro']->value['id'];?>
'>Borrar</a>
			<br/>
			</td>
			</tr>
		<?php } ?>
		</table>
	<?php }} ?>