<?php
/* Smarty version 4.3.1, created on 2023-04-02 13:06:02
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\categories\services\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64297dbabf5d05_49489315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a49c39e6498afb51c452e387a6747f81d60889e' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\categories\\services\\auth\\login.tpl',
      1 => 1680439284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64297dbabf5d05_49489315 (Smarty_Internal_Template $_smarty_tpl) {
?><div>LOGIN PAGE</div>
<form method="post" action="">
    <label>
        <input type="text" placeholder="login" name="login">
    </label>
    <br>
    <label>
        <input type="password" placeholder="password" name="password">
    </label>
    <br>
    <button type="submit">LOGIN</button>
</form>
<?php }
}
