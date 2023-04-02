<?php
/* Smarty version 4.3.1, created on 2023-04-02 15:28:30
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\tpl\content\main_pages\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64299f1ebc3b37_76228277',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b06091514b7c7241580a720f6e6688c06a579a59' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\tpl\\content\\main_pages\\home.tpl',
      1 => 1680439284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64299f1ebc3b37_76228277 (Smarty_Internal_Template $_smarty_tpl) {
?><div>HOME PAGE</div>
<?php if ($_smarty_tpl->tpl_vars['auth']->value) {?>
    <div>Logged in as <?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
</div>
<?php } else { ?>
    <div>Hello, guest!</div>
<?php }
}
}
