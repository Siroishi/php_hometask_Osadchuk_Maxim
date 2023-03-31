<?php
/* Smarty version 4.3.1, created on 2023-03-30 11:26:07
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642571cfe79903_90797167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3d291f5beaea8b0f7ebb39988ec3049615f8018' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\home.tpl',
      1 => 1680175516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642571cfe79903_90797167 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <div>HELLO HOME PAGE</div>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/cabinet">Cabinet</a>
    <a href="/news">News</a>
    <a href="/photo">Photos</a>
</body>
</html>
<?php }
}
