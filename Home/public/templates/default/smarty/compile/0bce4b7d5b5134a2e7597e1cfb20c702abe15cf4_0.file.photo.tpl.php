<?php
/* Smarty version 4.3.1, created on 2023-03-30 12:26:35
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\sp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64257ffba9d273_60298062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0bce4b7d5b5134a2e7597e1cfb20c702abe15cf4' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\sp.tpl',
      1 => 1680179183,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64257ffba9d273_60298062 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>PHOTO</div>
    <a href="/">Home</a>
    <a href="/about">About</a>
    <a href="/cabinet">Cabinet</a>
    <a href="/news">News</a>
    <a href="/photo">Photos</a>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'src');
$_smarty_tpl->tpl_vars['src']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['src']->value) {
$_smarty_tpl->tpl_vars['src']->do_else = false;
?>
        <div>
            <img src='<?php echo $_smarty_tpl->tpl_vars['src']->value;?>
' alt=''>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</body>
</html>
<?php }
}
