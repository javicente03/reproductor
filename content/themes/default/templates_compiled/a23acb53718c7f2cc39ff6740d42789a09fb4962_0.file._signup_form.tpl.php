<?php
/* Smarty version 3.1.40, created on 2022-05-10 07:46:00
  from 'C:\xampp\htdocs\reproductor\content\themes\default\templates\_signup_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.40',
  'unifunc' => 'content_627a1838b28459_12211421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a23acb53718c7f2cc39ff6740d42789a09fb4962' => 
    array (
      0 => 'C:\\xampp\\htdocs\\reproductor\\content\\themes\\default\\templates\\_signup_form.tpl',
      1 => 1652164241,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627a1838b28459_12211421 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="right">
<h2>Registry</h2>

<form class="js_ajax-forms form-panel" data-url="core/signup.php" method="POST">
	<input type="text" name="first_name" class="form-control" placeholder="Firstame">
	<input type="text" name="last_name" class="form-control" placeholder="Lastname">
	<input type="text" name="username" class="form-control" placeholder="Username">
	<input type="email" name="email" class="form-control" placeholder="Email">
	<input type="password" name="password" class="form-control" placeholder="Password">
	<button type="submit" class="send-login">Sign Up</button>
	<!-- error -->
        <div class="error-panel"></div>
    <!-- error -->
</form>
</div><?php }
}
