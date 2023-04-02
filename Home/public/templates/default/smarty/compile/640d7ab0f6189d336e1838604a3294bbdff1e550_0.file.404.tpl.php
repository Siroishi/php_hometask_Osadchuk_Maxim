<?php
/* Smarty version 4.3.1, created on 2023-04-02 15:28:30
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\tpl\content\error_pages\404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64299f1ee645b2_15595078',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '640d7ab0f6189d336e1838604a3294bbdff1e550' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\tpl\\content\\error_pages\\404.tpl',
      1 => 1680439284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64299f1ee645b2_15595078 (Smarty_Internal_Template $_smarty_tpl) {
?><div><h4>ERROR CODE: <?php echo $_smarty_tpl->tpl_vars['code']->value;?>
 </h4></div>
<div><h4>ERROR MESSAGE: <?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</h4></div>
<a href="/">HOME</a>


<?php }
}
