<?php
/* Smarty version 4.3.1, created on 2023-04-02 14:53:16
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\tpl\sections\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642996dc1b1135_37225596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ec6c14afc586d1565c26724159ef3f99d328631' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\tpl\\sections\\header.tpl',
      1 => 1680441642,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642996dc1b1135_37225596 (Smarty_Internal_Template $_smarty_tpl) {
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
