<?php /* Smarty version 3.1.27, created on 2015-09-05 03:12:21
         compiled from "C:\xampp\htdocs\genius\template\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:786755ea3365d90911_97083642%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a8fe37c6c193981e8a18375ce918c59ffb21abf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genius\\template\\login.html',
      1 => 1441406549,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '786755ea3365d90911_97083642',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ea3365dcdbd5_42163165',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ea3365dcdbd5_42163165')) {
function content_55ea3365dcdbd5_42163165 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '786755ea3365d90911_97083642';
if ($_smarty_tpl->tpl_vars['error']->value) {?>
<p>One of the fields key\password is invalid.</p>
<?php }?>
<form role="form" method="post">
    <div class="form-group">
        <label for="key">Key:</label>
        <input name="key" class="form-control" id="key" placeholder="Enter email/username/id">
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input name="password" type="password" class="form-control" id="password" placeholder="Enter password">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
</form><?php }
}
?>