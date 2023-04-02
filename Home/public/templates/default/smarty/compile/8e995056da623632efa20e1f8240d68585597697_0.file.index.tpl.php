<?php
/* Smarty version 4.3.1, created on 2023-04-02 15:28:30
  from 'D:\Dropbox\PHPTestProject\Home\public\templates\default\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_64299f1eb84110_76371674',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e995056da623632efa20e1f8240d68585597697' => 
    array (
      0 => 'D:\\Dropbox\\PHPTestProject\\Home\\public\\templates\\default\\index.tpl',
      1 => 1680449310,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./tpl/blocks/head.tpl' => 1,
    'file:./tpl/blocks/header.tpl' => 1,
    'file:./tpl/content/".((string)$_smarty_tpl->tpl_vars[\'content\']->value).".tpl' => 1,
    'file:./tpl/blocks/footer.tpl' => 1,
  ),
),false)) {
function content_64299f1eb84110_76371674 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./tpl/blocks/head.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./tpl/blocks/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:./tpl/content/".((string)$_smarty_tpl->tpl_vars['content']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_subTemplateRender("file:./tpl/blocks/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
