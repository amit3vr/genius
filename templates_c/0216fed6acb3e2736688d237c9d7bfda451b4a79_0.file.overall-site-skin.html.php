<?php /* Smarty version 3.1.27, created on 2015-09-05 03:57:50
         compiled from "C:\xampp\htdocs\genius\template\overall-site-skin.html" */ ?>
<?php
/*%%SmartyHeaderCode:1384655ea3e0ea18715_77519305%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0216fed6acb3e2736688d237c9d7bfda451b4a79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genius\\template\\overall-site-skin.html',
      1 => 1441414275,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1384655ea3e0ea18715_77519305',
  'variables' => 
  array (
    'title' => 0,
    'content' => 0,
    'exec_timer' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ea3e0ea5ee18_11802081',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ea3e0ea5ee18_11802081')) {
function content_55ea3e0ea5ee18_11802081 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1384655ea3e0ea18715_77519305';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="container">
    <div class="jumbotron">
        <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
        <p><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</p>
    </div>

    <div>Execution time: <?php echo $_smarty_tpl->tpl_vars['exec_timer']->value;?>
 second(s)</div>
</div>

</body>
</html>
<?php }
}
?>