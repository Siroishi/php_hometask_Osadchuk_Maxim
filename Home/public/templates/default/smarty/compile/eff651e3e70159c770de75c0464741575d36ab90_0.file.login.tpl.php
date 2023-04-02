<?php
/* Smarty version 4.3.1, created on 2023-04-02 15:29:56
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\tpl\content\auth\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64299f74b58b52_85426883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eff651e3e70159c770de75c0464741575d36ab90' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\tpl\\content\\auth\\login.tpl',
      1 => 1680439284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64299f74b58b52_85426883 (Smarty_Internal_Template $_smarty_tpl) {
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
