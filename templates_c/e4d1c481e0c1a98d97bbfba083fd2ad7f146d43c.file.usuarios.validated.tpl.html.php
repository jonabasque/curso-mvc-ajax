<?php /* Smarty version Smarty-3.1.8, created on 2012-04-04 10:19:04
         compiled from ".\templates\usuarios.validated.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:146454f7c03f8db08a2-51501175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4d1c481e0c1a98d97bbfba083fd2ad7f146d43c' => 
    array (
      0 => '.\\templates\\usuarios.validated.tpl.html',
      1 => 1333358730,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '146454f7c03f8db08a2-51501175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7c03f8dca647_05328520',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7c03f8dca647_05328520')) {function content_4f7c03f8dca647_05328520($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)&&$_smarty_tpl->tpl_vars['mensaje']->value!=null){?>
<div id="mensaje">
<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

</div>
<?php }?>
<?php }} ?>