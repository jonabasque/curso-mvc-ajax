<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 11:42:42
         compiled from ".\templates\usuarios.validated.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:219794f797491f2a900-72267207%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '219794f797491f2a900-72267207',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'mensaje' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7974920011e0_81020783',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7974920011e0_81020783')) {function content_4f7974920011e0_81020783($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)&&$_smarty_tpl->tpl_vars['mensaje']->value!=null){?>
<div id="mensaje">
<?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>

</div>
<?php }?>
<?php }} ?>