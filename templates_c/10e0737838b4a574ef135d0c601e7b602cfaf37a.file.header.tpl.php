<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 11:42:41
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:285564f797491e51ab8-46294387%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1333108604,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '285564f797491e51ab8-46294387',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f797491e5b520_27359921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f797491e5b520_27359921')) {function content_4f797491e5b520_27359921($_smarty_tpl) {?><DOCTYPE html>
<html>
<head>
<title>Titulo</title>
<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div id="header">
<h1>Titulo de mi plantilla</h1>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>