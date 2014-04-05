<?php /* Smarty version Smarty-3.1.8, created on 2012-04-04 10:19:55
         compiled from ".\templates\usuarios.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:259134f7c042bf2b225-55586160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38f63d5f724607fbcbd9217610f628396de61360' => 
    array (
      0 => '.\\templates\\usuarios.tpl.html',
      1 => 1333443998,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259134f7c042bf2b225-55586160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7c042c071637_21300224',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7c042c071637_21300224')) {function content_4f7c042c071637_21300224($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value=="listado"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.listado.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="add"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.add.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="show"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.show.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="delete"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.show.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="edit"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.edit.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="login"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.login.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="logout"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.logout.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="register"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.register.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['action']->value=="validated"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.validated.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.listado.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>
<?php }} ?>