<?php /* Smarty version Smarty-3.1.8, created on 2012-04-18 12:39:56
         compiled from ".\templates\restclientes.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199834f8e99fc30f515-20148448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d54868e519ae3f1099476d8e9f6559130430fa' => 
    array (
      0 => '.\\templates\\restclientes.tpl',
      1 => 1334739523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199834f8e99fc30f515-20148448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8e99fc3969f9_45131328',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8e99fc3969f9_45131328')) {function content_4f8e99fc3969f9_45131328($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value=="listado"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("clientes.listado.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="add"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("clientes.add.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="show"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("clientes.show.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="delete"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("clientes.show.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="edit"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("clientes.edit.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ("clientes.listado.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?><?php }} ?>