<?php /* Smarty version 3.1.27, created on 2015-08-22 06:17:15
         compiled from "C:\xampp\htdocs\Brainiac\template\skin.html" */ ?>
<?php
/*%%SmartyHeaderCode:1414755d7e9bb44e727_32466301%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d855a3d0198afdc68ad07a264a70cb6547b93d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Brainiac\\template\\skin.html',
      1 => 1440213433,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1414755d7e9bb44e727_32466301',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'exec_timer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d7e9bb4e7090_23409878',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d7e9bb4e7090_23409878')) {
function content_55d7e9bb4e7090_23409878 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1414755d7e9bb44e727_32466301';
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