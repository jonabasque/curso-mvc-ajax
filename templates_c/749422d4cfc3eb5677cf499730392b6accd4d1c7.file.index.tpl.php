<?php /* Smarty version Smarty-3.1.8, created on 2012-04-18 14:38:47
         compiled from ".\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181524f8eb5d706cc49-80811190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '749422d4cfc3eb5677cf499730392b6accd4d1c7' => 
    array (
      0 => '.\\templates\\index.tpl',
      1 => 1333453529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181524f8eb5d706cc49-80811190',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'modulo' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8eb5d70fd338_87731315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8eb5d70fd338_87731315')) {function content_4f8eb5d70fd338_87731315($_smarty_tpl) {?><?php  $_config = new Smarty_Internal_Config("miconfiguracion.conf", $_smarty_tpl->smarty, $_smarty_tpl);$_config->loadConfigVars("setup", 'local'); ?>

<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div id="contenido">

<?php if ($_smarty_tpl->tpl_vars['modulo']->value=="clientes"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("clientes.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['modulo']->value=="usuarios"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("usuarios.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['modulo']->value=="socios"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("socios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }elseif($_smarty_tpl->tpl_vars['modulo']->value=="error"){?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }else{ ?>
	<?php echo $_smarty_tpl->getSubTemplate ("main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

</div>


<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>