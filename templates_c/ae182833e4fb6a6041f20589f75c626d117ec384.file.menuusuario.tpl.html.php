<?php /* Smarty version Smarty-3.1.8, created on 2012-04-18 14:38:47
         compiled from ".\templates\menuusuario.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:107274f8eb5d71af5b4-46400001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae182833e4fb6a6041f20589f75c626d117ec384' => 
    array (
      0 => '.\\templates\\menuusuario.tpl.html',
      1 => 1334747978,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '107274f8eb5d71af5b4-46400001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'presentalogin' => 1,
    'session' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f8eb5d71d93c8_26924534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f8eb5d71d93c8_26924534')) {function content_4f8eb5d71d93c8_26924534($_smarty_tpl) {?><div id="menuuser">
	<?php if ($_smarty_tpl->tpl_vars['presentalogin']->value==true){?>
	<form id="login" name="login" 
		action="index.php?module=usuarios&action=login" method="post">
	<label for="data[username]">Nombre de usuario</label>
	<input type="text" id="username" tabindex="1" 
	name="data[username]" value=""/>
	<label for="data[password]">password</label>
	<input type="password" id="password" tabindex="2" 
	name="data[password]" value=""/>
	<input 
	type="submit" name="data[submit]" 
	id="submit" value="Enviar"/>
</form>
<script>
$.validator.setDefaults({
	submitHandler: function() { alert("submitted!"); }
});
$(document).ready(function(){
$("#login").validate({
		rules: {
			"data[username]": {
				required: true
			},
			"data[password]": {
				required: true
			}
			
		},
		messages: {
			"data[username]": {
				required: "Please enter a username"
			},
			"data[password]": {
				required: "Please provide a password"
			}
		},
		submitHandler: function() {
			$.post("index.php?module=usuarios&action=login&output=htmlp",
			{
				'data[username]': $("#username").val(),
				'data[password]': $("#password").val()
			}, 
			function(data){
				$("#menuuser").html(data);
			});
		}
	});
});
</script>
	<?php }else{ ?>
		Bienvenido, <?php echo $_smarty_tpl->tpl_vars['session']->value['user']['username'];?>
!<br/>
		<a href="index.php?module=usuarios&action=logout">Desconectar</a>
		<ol>
		<li><a href="index.php?module=clientes">Clientes</a></li>
	    	<li><a href="index.php?module=usuarios">Usuarios</a></li>
	    	<li><a href="index.php?module=socios">Socios</a></li>
	    	</ol>
	<?php }?>
</div>
<?php }} ?>