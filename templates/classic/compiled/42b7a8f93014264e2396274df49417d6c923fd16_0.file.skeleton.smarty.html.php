<?php /* Smarty version 3.1.27, created on 2015-10-11 07:39:09
         compiled from "C:\xampp\htdocs\genius\templates\classic\skeleton.smarty.html" */ ?>
<?php
/*%%SmartyHeaderCode:99995619e7ed26c8f7_06906828%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42b7a8f93014264e2396274df49417d6c923fd16' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genius\\templates\\classic\\skeleton.smarty.html',
      1 => 1444538345,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99995619e7ed26c8f7_06906828',
  'variables' => 
  array (
    'site' => 0,
    'title' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_5619e7ed2b5d10_70916349',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5619e7ed2b5d10_70916349')) {
function content_5619e7ed2b5d10_70916349 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '99995619e7ed26c8f7_06906828';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<title><?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
 > <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:400,300|Slabo+27px|Lora|Bitter|PT+Serif|Bree+Serif|Sanchez|Roboto:400,300">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/resources/bootstrap3/css/bootstrap.min.css">
<?php echo '<script'; ?>
 src="resources/bootstrap3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="/resources/site.css">
<link rel="stylesheet" type="text/css" href="/resources/feed.css">
</head>

<nav>
    <ul>
        <li class="logo"><?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
</li>
    </ul>
    <ul>
        <?php if (\Genius\User::my(true)) {?>
        <li>
            <a class="fa fa-globe fa-lg" href="#"></a>
        </li>
        <li>
            <a class="fa fa-envelope fa-lg" href="#"></a>
        </li>
        <li><span class="seperator"></span></li>
        <li><a href="/@<?php echo \Genius\User::my('username');?>
"><?php echo \Genius\User::my('email');?>
</a></li>
        <li class="profile-pic">
            <img src="http://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png" />
        </li>
        <?php } else { ?>
        <li>Hi, Guest</li>
        <li><span class="seperator"></span></li>
        <li><a href="#" class="btn btn-xs btn-primary">Login</a></li>
        <li><a href="#" class="btn btn-xs btn-success">Register</a></li>
        <?php }?>
    </ul>
</nav>

<body>
<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</body>
</html>
<?php }
}
?>