<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
  <head>
   
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>{if $session.idioma eq "es"}Título{else}Tituloa{/if}</title>
<link href="css/estilo.css" rel="stylesheet">
<script type="text/javascript" 
src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
</head>
<body>
<div id="wrapper">
<div id="header">
<h1>Titulo de mi plantilla</h1>
{include file="menuidioma.tpl.html"}
{include file="menuusuario.tpl.html"}
</div>
{include file="menu.tpl.html"}


