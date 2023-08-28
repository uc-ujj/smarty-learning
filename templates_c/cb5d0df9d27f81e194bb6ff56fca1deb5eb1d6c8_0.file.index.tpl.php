<?php
/* Smarty version 4.3.2, created on 2023-08-23 13:46:01
  from 'C:\xampp\htdocs\smarty\try\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64e5f17992d100_42646098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cb5d0df9d27f81e194bb6ff56fca1deb5eb1d6c8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\try\\templates\\index.tpl',
      1 => 1692791160,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64e5f17992d100_42646098 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['title']->value, ENT_QUOTES, 'UTF-8', true);?>
</h1>

    <ul>
        
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cities']->value, 'city');
$_smarty_tpl->tpl_vars['city']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['city']->value) {
$_smarty_tpl->tpl_vars['city']->do_else = false;
?>
            <li><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['city']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
 (<?php echo $_smarty_tpl->tpl_vars['city']->value['population'];?>
)</li>
        <?php
}
if ($_smarty_tpl->tpl_vars['city']->do_else) {
?>
            <li>No Cities Found</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
    </body>
</html>
<?php }
}
