<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 11:17:15
         compiled from ".\templates\clientes.show.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:182524f7ac01b470a31-82542240%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '278a0301d564d489b474578e7f0f2ba842193f62' => 
    array (
      0 => '.\\templates\\clientes.show.tpl.html',
      1 => 1333354763,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182524f7ac01b470a31-82542240',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 1,
    'delete' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7ac01b49bae6_20449933',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7ac01b49bae6_20449933')) {function content_4f7ac01b49bae6_20449933($_smarty_tpl) {?><label >ID: <?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['id'];?>
</label><br/>
<label>Nombre:<?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['nombre'];?>
</label>	<br/>
<label>CIF:<?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['cif'];?>
</label>	<br/>
<?php if (isset($_smarty_tpl->tpl_vars['delete']->value)){?>
	<a href='index.php?module=clientes&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['id'];?>
&confirm=1'>Borrar Realmente</a><br/>
<?php }?>


<a href='index.php?module=clientes&action=listado'>Volver</a><?php }} ?>