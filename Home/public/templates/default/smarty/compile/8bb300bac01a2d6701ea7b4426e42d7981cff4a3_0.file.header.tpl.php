<?php
/* Smarty version 4.3.1, created on 2023-04-02 15:06:43
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\tpl\blocks\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64299a039f67f9_73085398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bb300bac01a2d6701ea7b4426e42d7981cff4a3' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\tpl\\blocks\\header.tpl',
      1 => 1680441642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64299a039f67f9_73085398 (Smarty_Internal_Template $_smarty_tpl) {
?><a href="/">Home</a>
<a href="/about">About</a>
<a href="/contacts">Contacts</a>
<a href="/news">News</a>
<a href="/sp">Parliament</a>
<?php if ($_smarty_tpl->tpl_vars['auth']->value) {?>
    <a href="/logout">Logout</a>
<?php } else { ?>
    <a href="/login">Login</a>
<?php }
}
}
