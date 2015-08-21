<?php /* Smarty version 3.1.27, created on 2015-08-21 04:46:33
         compiled from "C:\xampp\htdocs\Brainiac\template\skin.html" */ ?>
<?php
/*%%SmartyHeaderCode:801555d682f9bdc7f3_07002127%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d855a3d0198afdc68ad07a264a70cb6547b93d3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Brainiac\\template\\skin.html',
      1 => 1440121591,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '801555d682f9bdc7f3_07002127',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55d682f9c69a42_87179136',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55d682f9c69a42_87179136')) {
function content_55d682f9c69a42_87179136 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '801555d682f9bdc7f3_07002127';
?>
<html>
<body>

<h3><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h3>
<p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
</body>
</html><?php }
}
?>