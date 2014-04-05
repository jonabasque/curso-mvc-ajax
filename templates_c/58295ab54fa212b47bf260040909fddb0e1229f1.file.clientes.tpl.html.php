<?php /* Smarty version Smarty-3.1.8, created on 2012-04-03 13:47:08
         compiled from ".\templates\clientes.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:214584f7ae33c57d478-65315489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58295ab54fa212b47bf260040909fddb0e1229f1' => 
    array (
      0 => '.\\templates\\clientes.tpl.html',
      1 => 1333355111,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214584f7ae33c57d478-65315489',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'action' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7ae33c5cfdc0_76768640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7ae33c5cfdc0_76768640')) {function content_4f7ae33c5cfdc0_76768640($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['action']->value=="listado"){?>
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

<?php }?>
<?php }} ?>