<?php
/* Smarty version 4.3.1, created on 2023-04-02 14:53:16
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\tpl\content\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_642996dc212812_59063188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8f8559edd73646b898b043ee81de1c8188ea81a' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\tpl\\content\\home.tpl',
      1 => 1680439284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_642996dc212812_59063188 (Smarty_Internal_Template $_smarty_tpl) {
?><div>HOME PAGE</div>
<?php if ($_smarty_tpl->tpl_vars['auth']->value) {?>
    <div>Logged in as <?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
</div>
<?php } else { ?>
    <div>Hello, guest!</div>
<?php }
}
}
