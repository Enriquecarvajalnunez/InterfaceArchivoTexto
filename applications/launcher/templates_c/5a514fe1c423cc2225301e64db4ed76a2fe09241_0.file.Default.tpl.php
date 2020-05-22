<?php
/* Smarty version 3.1.34-dev-7, created on 2020-05-22 05:35:01
  from 'C:\xampp\htdocs\DatosPHP\applications\launcher\web\html\Default.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5ec74865b8a4e7_27372697',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5a514fe1c423cc2225301e64db4ed76a2fe09241' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DatosPHP\\applications\\launcher\\web\\html\\Default.tpl',
      1 => 1590118471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlConfig/header.tpl' => 1,
    'file:htmlConfig/main.tpl' => 1,
    'file:htmlConfig/scripts.tpl' => 1,
  ),
),false)) {
function content_5ec74865b8a4e7_27372697 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

<head>

  <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</head>

<body>
   <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  

  <?php $_smarty_tpl->_subTemplateRender("file:htmlConfig/scripts.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</body>

</html>
<?php }
}
