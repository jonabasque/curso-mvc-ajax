<?php /* Smarty version Smarty-3.1.8, created on 2012-04-02 14:17:36
         compiled from ".\templates\usuarios.register.tpl.html" */ ?>
<?php /*%%SmartyHeaderCode:289874f7998e07565e8-08408914%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7835f11a403ab469fd366aed963b1cd87c146a10' => 
    array (
      0 => '.\\templates\\usuarios.register.tpl.html',
      1 => 1333369050,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '289874f7998e07565e8-08408914',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errores' => 0,
    'error' => 0,
    'user' => 0,
    'ciudades' => 1,
    'ciudad' => 1,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_4f7998e08d9454_13394973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4f7998e08d9454_13394973')) {function content_4f7998e08d9454_13394973($_smarty_tpl) {?> 	<form 
    	name="register_user" 
    	id="register_user" 
    	action="index.php?module=usuarios&action=register"
    	method="post">
    		<label for="user[usuario]">Nombre de Usuario.<br/>
    			<?php if (isset($_smarty_tpl->tpl_vars['errores']->value['usuario'])&&$_smarty_tpl->tpl_vars['errores']->value['usuario']!=null){?>
    			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value['usuario']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br/>
    			<?php } ?>
    			<?php }?>
    			</label>
    		<input type="text" name="user[usuario]"
    			id="usuario" tabindex="1" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value['usuario'])&&$_smarty_tpl->tpl_vars['user']->value['usuario']!=''){?><?php echo $_smarty_tpl->tpl_vars['user']->value['usuario'];?>
<?php }?>"
    		 />	<br/>
    		 <label for="user[pass]">Contraseña.<br/>
    		 	<?php if (isset($_smarty_tpl->tpl_vars['errores']->value['pass'])&&$_smarty_tpl->tpl_vars['errores']->value['pass']!=null){?>
    			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value['pass']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br/>
    			<?php } ?>
    			<?php }?></label>
    		 <input type="password" name="user[pass]"
    		 id="pass" value="" /><br/>
    		 <label for="user[pass2]">Repita Contraseña.<br/>
    		 	<?php if (isset($_smarty_tpl->tpl_vars['errores']->value['pass2'])&&$_smarty_tpl->tpl_vars['errores']->value['pass2']!=null){?>
    			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value['pass2']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br/>
    			<?php } ?>
    			<?php }?>
    		 </label>
    		 <input type="password" name="user[pass2]"
    		 id="pass2" value="" /><br/>
    		 <label for="user[email]">Email.<br/>
    		 	<?php if (isset($_smarty_tpl->tpl_vars['errores']->value['email'])&&$_smarty_tpl->tpl_vars['errores']->value['email']!=null){?>
    			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value['email']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br/>
    			<?php } ?>
    			<?php }?>
    		 </label>
    		 <input type="text" name="user[email]"
    		 id="email" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value['email'])&&$_smarty_tpl->tpl_vars['user']->value['email']!=''){?><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
<?php }?>" /><br/>
    		
    		 <label for="user[ciudad]">Ciudad.<br/></label>
    		<select name='user[idciudad]'>
			<?php  $_smarty_tpl->tpl_vars['ciudad'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ciudad']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ciudades']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ciudad']->key => $_smarty_tpl->tpl_vars['ciudad']->value){
$_smarty_tpl->tpl_vars['ciudad']->_loop = true;
?>
				<option value="<?php echo $_smarty_tpl->tpl_vars['ciudad']->value['idciudad'];?>
" 
    		 	<?php if (isset($_smarty_tpl->tpl_vars['user']->value['idciudad'])&&$_smarty_tpl->tpl_vars['user']->value['idciudad']==$_smarty_tpl->tpl_vars['ciudad']->value['idciudad']){?>
				 	 selected='true'
				<?php }?>
    		 	><?php echo $_smarty_tpl->tpl_vars['ciudad']->value['nombre'];?>
</option>
			<?php } ?>
			</select><br/>
    		
    		 <label for="user[cp]">Código Postal.<br/>
    		 	<?php if (isset($_smarty_tpl->tpl_vars['errores']->value['cp'])&&$_smarty_tpl->tpl_vars['errores']->value['cp']!=null){?>
    			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value['cp']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br/>
    			<?php } ?>
    			<?php }?>
    		 </label>
    		 <input type="text" name="user[cp]"
    		 id="cp" value="<?php if (isset($_smarty_tpl->tpl_vars['user']->value['cp'])&&$_smarty_tpl->tpl_vars['user']->value['cp']!=''){?><?php echo $_smarty_tpl->tpl_vars['user']->value['cp'];?>
<?php }?>" /><br/>
    		 
    		 <label for="user[envio]">Envio de boletín.<br/>
    		 	<?php if (isset($_smarty_tpl->tpl_vars['errores']->value['envio'])&&$_smarty_tpl->tpl_vars['errores']->value['envio']!=null){?>
    			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value['envio']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br/>
    			<?php } ?>
    			<?php }?>
    		 </label>
    		 <label>Sí</label>
    		 <input type="radio" name="user[boletin]"
    		 id="envio" value="si" <<?php ?>?php
    		 if (isset($user['boletin'])
    		 &&$user['boletin']==1) { 
    		 	echo "checked='true'";
    		 }?<?php ?>>/>
    		 <label>No</label>
    		 <input type="radio" name="user[boletin]"
    		 id="envio" value="no" <<?php ?>?php
    		 if (isset($user['boletin'])
    		 &&$user['boletin']==0) { 
    		 	echo "checked='true'";
    		 }?<?php ?>>/><br/>
    		 <label for="user[cond]">Acepta las condiciones de uso?<br/>
    		 	<?php if (isset($_smarty_tpl->tpl_vars['errores']->value['cond'])&&$_smarty_tpl->tpl_vars['errores']->value['cond']!=null){?>
    			<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errores']->value['cond']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
    				<?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<br/>
    			<?php } ?>
    			<?php }?>
    		 </label>
    		 <input type="checkbox" name="user[cond]"
    		 id="cond" value="si" <<?php ?>?php
    		 if (isset($user['cond'])) { 
    		 	checkedsimanda($user['cond']);
    		 }?<?php ?>>/><br/>
    		 <input type="submit" name="user[submit]"
    		 id="submit" value="Enviar" /><br/>
    	</form>

<?php }} ?>