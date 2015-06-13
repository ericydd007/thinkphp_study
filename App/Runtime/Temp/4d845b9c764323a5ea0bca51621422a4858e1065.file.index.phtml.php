<?php /* Smarty version Smarty-3.1.6, created on 2015-06-13 15:19:11
         compiled from "./App/Home/View/Index/index.phtml" */ ?>
<?php /*%%SmartyHeaderCode:1843907030557bd96f9fef55-33087600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4d845b9c764323a5ea0bca51621422a4858e1065' => 
    array (
      0 => './App/Home/View/Index/index.phtml',
      1 => 1434179893,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1843907030557bd96f9fef55-33087600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'test' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_557bd96fa6248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557bd96fa6248')) {function content_557bd96fa6248($_smarty_tpl) {?> <!doctype html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8" />
 	<title>Document</title>
 </head>
 <body>
 	<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['test']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
 	<?php echo $_smarty_tpl->tpl_vars['v']->value;?>

 	<?php } ?>
 </body>
 </html><?php }} ?>