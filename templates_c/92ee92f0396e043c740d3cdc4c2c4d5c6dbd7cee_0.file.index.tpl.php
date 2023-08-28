<?php
/* Smarty version 4.3.2, created on 2023-08-28 05:33:52
  from 'C:\xampp\htdocs\smarty\learning\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_64ec15a0eae129_66176635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92ee92f0396e043c740d3cdc4c2c4d5c6dbd7cee' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\learning\\templates\\index.tpl',
      1 => 1693193629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64ec15a0eae129_66176635 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .first-word {
            color: cornflowerblue;
        }
    </style>
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
    <h2><?php echo $_smarty_tpl->tpl_vars['cities']->value[0]['population'];?>
</h2>

        <!-- This is an HTML comment which is sent to the browser -->

    
    
    <?php echo $_smarty_tpl->smarty->ext->configLoad->_getConfigVariable($_smarty_tpl, 'title');?>


    <h2 class="first-word"><?php echo $_smarty_tpl->tpl_vars['word1']->value;?>
</h2>
    <?php echo $_smarty_tpl->tpl_vars['name_arr']->value;?>


        <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
        <li><?php echo implode(', ',$_smarty_tpl->tpl_vars['player']->value);?>
</li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>

        <p>User: <?php echo $_smarty_tpl->tpl_vars['user']->value->name;?>
</p>
    <p>User: <?php echo $_smarty_tpl->tpl_vars['user']->value->profile;?>
</p>

        <?php if ($_smarty_tpl->tpl_vars['user']->value->profile == 'admin') {?>
        <p><a href="#">Manage Users</a></p>
    <?php } else { ?>
        <p><a href="#">My Profile</a></p>
    <?php }?>

    <?php echo add(2);?>

    
</body>
</html>
<?php }
}
