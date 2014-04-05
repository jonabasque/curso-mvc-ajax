<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 14:17:36
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:65084f7998e066d2d9-66459599%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1333364900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65084f7998e066d2d9-66459599',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7998e0675750_15866816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7998e0675750_15866816')) {function content_4f7998e0675750_15866816($_smarty_tpl) {?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  <head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Titulo</title>
<link href="css/estilo.css" rel="stylesheet">
</head>
<body>
<div id="wrapper">
<div id="header">
<h1>Titulo de mi plantilla</h1>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("menu.tpl.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>



<?php }} ?>