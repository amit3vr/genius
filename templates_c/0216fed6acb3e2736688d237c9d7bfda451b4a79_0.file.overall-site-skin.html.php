<?php /* Smarty version 3.1.27, created on 2015-09-15 12:12:49
         compiled from "C:\xampp\htdocs\genius\template\overall-site-skin.html" */ ?>
<?php
/*%%SmartyHeaderCode:1518555f7e111444658_83641174%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0216fed6acb3e2736688d237c9d7bfda451b4a79' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genius\\template\\overall-site-skin.html',
      1 => 1442308254,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1518555f7e111444658_83641174',
  'variables' => 
  array (
    'site' => 0,
    'title' => 0,
    'user' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f7e11148a2f6_42892997',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f7e11148a2f6_42892997')) {
function content_55f7e11148a2f6_42892997 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1518555f7e111444658_83641174';
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
<link rel="stylesheet" type="text/css" href="resources/bootstrap3/css/bootstrap.min.css">
<?php echo '<script'; ?>
 src="resources/bootstrap3/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="resources/site.css">
<link rel="stylesheet" type="text/css" href="resources/feed.css">
</head>

<nav>
    <ul>
        <li class="logo"><?php echo $_smarty_tpl->tpl_vars['site']->value['name'];?>
</li>
        <li>
            <span class="seperator"></span>
        </li>
        <li>
            <a class="fa fa-globe fa-lg" href="#"></a>
        </li>
        <li>
            <a class="fa fa-envelope fa-lg" href="#"></a>
        </li>
    </ul>
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['user']->value) {?>
        <li class="profile-details">
            <div><a href="#">Amit Evron</a></div>
            <div>Teacher</div>
        </li>
        <li>
            <img src="http://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png" class="profile-pic" />
        </li>
        <?php } else { ?>
        <li class="profile-details">
            Guest, Log-in
        </li>
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