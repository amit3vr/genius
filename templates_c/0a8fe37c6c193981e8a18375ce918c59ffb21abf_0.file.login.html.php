<?php /* Smarty version 3.1.27, created on 2015-09-15 21:54:48
         compiled from "C:\xampp\htdocs\genius\template\login.html" */ ?>
<?php
/*%%SmartyHeaderCode:2446755f86978d60bf5_30809303%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a8fe37c6c193981e8a18375ce918c59ffb21abf' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genius\\template\\login.html',
      1 => 1442343287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2446755f86978d60bf5_30809303',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55f86978daa5c0_67802540',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55f86978daa5c0_67802540')) {
function content_55f86978daa5c0_67802540 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2446755f86978d60bf5_30809303';
?>
<style>
.login-page>div {
    text-align: center;
    padding: 90px 0;
}
.login-page>form {
    width: 450px;
    margin: auto;
}
.login-page>form>div {
    padding-bottom: 10px;
}
.login-page h1 {
    margin-top: 20px;

    font-family: 'Roboto', sans-serif;
    font-weight: 300;
    font-size: 72px;
}
.login-page h6 {
    font-family: 'Lora', sans-serif;
    font-weight: 300;
    font-size: 18px;
    color: rgba(149, 165, 166, 1);
}
</style>

<div class="login-page">
    <div>
        <h1 style="padding-bottom: 10px">Login to Genius</h1>
        <h6>Keep updated. Track your scores. Break your limits.</h6>
    </div>

    <form method="post" action="#">
        <div class="input-group">
            <span class="input-group-addon fa fa-user" aria-hidden="true"></span>
            <input type="text" name="key" class="form-control" placeholder="Email address or ID" autocomplete="off">
        </div>

        <div class="input-group">
            <span class="input-group-addon fa fa-lock" aria-hidden="true"></span>
            <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="off">
        </div>

        <div>
            <div class="pull-left"><a href="#" style="font-size: 11px">forgot your password?</a></div>
            <div class="pull-right"><button type="submit" class="btn btn-primary">GO >></button></div>
        </div>
    </form>
</div><?php }
}
?>