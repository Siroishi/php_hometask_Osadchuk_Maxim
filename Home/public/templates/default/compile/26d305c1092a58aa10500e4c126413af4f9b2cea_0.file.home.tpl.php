<?php
/* Smarty version 4.3.1, created on 2023-04-02 12:44:13
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\content\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6429789d911745_34791337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26d305c1092a58aa10500e4c126413af4f9b2cea' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\content\\home.tpl',
      1 => 1680439284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6429789d911745_34791337 (Smarty_Internal_Template $_smarty_tpl) {
?><div>HOME PAGE</div>
<?php if ($_smarty_tpl->tpl_vars['auth']->value) {?>
    <div>Logged in as <?php echo $_smarty_tpl->tpl_vars['auth']->value;?>
</div>
<?php } else { ?>
    <div>Hello, guest!</div>
<?php }
}
}
