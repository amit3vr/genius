<?php /* Smarty version 3.1.27, created on 2015-08-25 20:49:58
         compiled from "C:\xampp\htdocs\genius\template\skin.html" */ ?>
<?php
/*%%SmartyHeaderCode:483355dcb8d6c5f085_23713311%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87a350d4a725766d723720bfbade9b4b1aa522b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genius\\template\\skin.html',
      1 => 1440528565,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '483355dcb8d6c5f085_23713311',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'exec_timer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55dcb8d6cb61f3_98384055',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55dcb8d6cb61f3_98384055')) {
function content_55dcb8d6cb61f3_98384055 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '483355dcb8d6c5f085_23713311';
?>
<html>
<body>

<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
Execution time: <?php echo $_smarty_tpl->tpl_vars['exec_timer']->value;?>

</body>
</html><?php }
}
?>