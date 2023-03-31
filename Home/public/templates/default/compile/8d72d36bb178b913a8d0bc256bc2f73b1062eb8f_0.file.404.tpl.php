<?php
/* Smarty version 4.3.1, created on 2023-03-30 12:12:05
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64257c95690f45_91528090',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d72d36bb178b913a8d0bc256bc2f73b1062eb8f' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\404.tpl',
      1 => 1680178324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64257c95690f45_91528090 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error: <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <div><h4>ERROR CODE: <?php echo $_smarty_tpl->tpl_vars['code']->value;?>
 </h4></div>
    <div><h4>ERROR MESSAGE: <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4></div>
    <a href="/">HOME</a>
</body>
</html>
<?php }
}
