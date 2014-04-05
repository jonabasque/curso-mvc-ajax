<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 13:13:24
         compiled from ".\templates\usuarios.show.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:274484f7989d459aee1-20700124%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f13d6a684bfb156438d7da7945c5c54babea6f8' => 
    array (
      0 => '.\\templates\\usuarios.show.tpl.html',
      1 => 1333365194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '274484f7989d459aee1-20700124',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'datos' => 1,
    'datosc' => 1,
    'datospro' => 1,
    'datosp' => 1,
    'delete' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7989d46008b7_34463195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7989d46008b7_34463195')) {function content_4f7989d46008b7_34463195($_smarty_tpl) {?>ID:	<?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['id'];?>

<br/>
Nombre: <?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['username'];?>

<br/>
Email: <?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['email'];?>

<br/>
CP: <?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['cp'];?>
<br/>
Ciudad:  <?php echo $_smarty_tpl->tpl_vars['datosc']->value[0]['nombre'];?>
  (<?php echo $_smarty_tpl->tpl_vars['datospro']->value[0]['nombre'];?>
) <?php echo $_smarty_tpl->tpl_vars['datosp']->value[0]['nombre'];?>
<br/>
Acepta el boletin: <?php if ($_smarty_tpl->tpl_vars['datos']->value[0]['boletin']==1){?>Si<?php }else{ ?>No<?php }?>
<br/>
Acepta las condiciones: <?php if ($_smarty_tpl->tpl_vars['datos']->value[0]['acepta']==1){?>Si<?php }else{ ?>No<?php }?>
<br/>
<?php if (isset($_smarty_tpl->tpl_vars['delete']->value)){?>
	<a href='index.php?module=usuarios&action=delete&id=<?php echo $_smarty_tpl->tpl_vars['datos']->value[0]['id'];?>
&confirm=1'>Borrar Realmente</a><br/>
<?php }?>
<a href='index.php?module=usuarios&action=listado'>Volver</a>
<?php }} ?>