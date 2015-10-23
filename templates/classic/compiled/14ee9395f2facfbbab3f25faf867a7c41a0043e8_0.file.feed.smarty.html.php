<?php /* Smarty version 3.1.27, created on 2015-09-28 02:19:49
         compiled from "C:\xampp\htdocs\genius\templates\classic\feed.smarty.html" */ ?>
<?php
/*%%SmartyHeaderCode:941656087995536d24_74792327%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14ee9395f2facfbbab3f25faf867a7c41a0043e8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\genius\\templates\\classic\\feed.smarty.html',
      1 => 1442432342,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '941656087995536d24_74792327',
  'variables' => 
  array (
    'pinned_posts' => 0,
    'post' => 1,
    'regular_posts' => 1,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_560879957e9e37_56164266',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560879957e9e37_56164266')) {
function content_560879957e9e37_56164266 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:\\xampp\\htdocs\\genius\\kernel\\libraries\\Smarty\\libs\\plugins\\modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '941656087995536d24_74792327';
?>
<div class="feed">
    <div style="width: 20%">
        <div class="side-menu">
            <div>
                <h6>YOU</h6>
                <a href="/@<?php echo \Genius\User::my('username');?>
"><?php echo \Genius\User::my('email');?>
</a>
                <a href="/settings">Settings</a>
            </div>
            <div>
                <h6>SCHOOL</h6>
                <a href="/feed" class="active">Feed</a>
                <a href="/inbox">Inbox</a>
                <a href="/classes">Classes</a>
                <a href="/groups">Groups</a>
                <a href="/schedule">Schedule</a>
                <a href="/calander">School Events</a>
            </div>
            <div>
                <h6>NEED A HAND?</h6>
                <a href="/help">Help</a>
                <a href="/feedback">Feedback</a>
                <a href="/forum">Ask a Question</a>
            </div>
        </div>
    </div>

    <div class="data-items" style="width: 55%">
        <input class="search-box" type="text" placeholder="Search..." />
        <div id="pinned">
        <?php
$_from = $_smarty_tpl->tpl_vars['pinned_posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value instanceof Genius\Announcement) {?>
        <div class="announcement">
            <div class="header">
                <?php if ($_smarty_tpl->tpl_vars['post']->value->author) {?>
                <div class="profile-details">
                    <img src="http://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png"/>
                    <div>
                        <a href="/@<?php echo $_smarty_tpl->tpl_vars['post']->value->author->username;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->author->full_name;?>
</a> · <?php echo \Genius\Utilities::time_elapsed($_smarty_tpl->tpl_vars['post']->value->create_date);?>

                        <small>Teacher</small>
                    </div>
                </div>
                <?php } else { ?>
                <div class="profile-details">
                    <img src="http://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png"/>
                    <div>
                        <a href="/about">School Board</a> · <?php echo \Genius\Utilities::time_elapsed($_smarty_tpl->tpl_vars['post']->value->create_date);?>

                        <small>System Administrator</small>
                    </div>
                </div>
                <?php }?>
                <div class="side-info">PINNED</div>
            </div>
            <div class="content">
                <?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

            </div>
        </div>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
        </div>

        <div class="separator">RECENT NEWS</div>
        <div class="not-pinned">
        
        <?php
$_from = $_smarty_tpl->tpl_vars['regular_posts']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['post'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['post']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
$_smarty_tpl->tpl_vars['post']->_loop = true;
$foreach_post_Sav = $_smarty_tpl->tpl_vars['post'];
?>
        <?php if ($_smarty_tpl->tpl_vars['post']->value instanceof Genius\Announcement) {?>
        <div class="announcement">
            <div class="header">
                <?php if ($_smarty_tpl->tpl_vars['post']->value->author) {?>
                <div class="profile-details">
                    <img src="http://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png"/>
                    <div>
                        <a href="/@<?php echo $_smarty_tpl->tpl_vars['post']->value->author->username;?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value->author->full_name;?>
</a> · <?php echo \Genius\Utilities::time_elapsed($_smarty_tpl->tpl_vars['post']->value->create_date);?>

                        <small>Teacher</small>
                    </div>
                </div>
                <?php } else { ?>
                <div class="profile-details">
                    <img src="http://bootstrap-themes.github.io/application/assets/img/avatar-dhg.png"/>
                    <div>
                        <a href="/about">School Board</a> · <?php echo \Genius\Utilities::time_elapsed($_smarty_tpl->tpl_vars['post']->value->create_date);?>

                        <small>System Administrator</small>
                    </div>
                </div>
                <?php }?>
            </div>
            <div class="content">
                <?php echo $_smarty_tpl->tpl_vars['post']->value->content;?>

            </div>
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['post']->value instanceof Genius\Event) {?>
        <div class="event">
            <div class="header">
                <div class="date"><small><?php echo smarty_modifier_date_format(Date($_smarty_tpl->tpl_vars['post']->value->start_date),"%B");?>

                </small><?php echo smarty_modifier_date_format(Date($_smarty_tpl->tpl_vars['post']->value->start_date),"%d");?>
</div>
                <div class="details">
                    <small>@ <?php echo $_smarty_tpl->tpl_vars['post']->value->place;?>
</small>
                    <h1><?php echo $_smarty_tpl->tpl_vars['post']->value->title;?>
</h1>
                    <small>From 19:30 to 21:00</small>
                </div>
                <div class="side-info">
                    <div class="btn-group" role="group" aria-label="...">
                        <button type="button" class="btn btn-xs btn-danger"><span class="fa fa-times" aria-hidden="true"></span></button>
                        <button type="button" class="btn btn-xs btn-warning"><span class="fa fa-question" aria-hidden="true"></span></button>
                        <button type="button" class="btn btn-xs btn-success"><span class="fa fa-check" aria-hidden="true"></span></button>
                    </div>
                </div>
            </div>
            <div class="content">
                <?php echo substr($_smarty_tpl->tpl_vars['post']->value->description,0,250);?>

                <?php if (mb_strlen($_smarty_tpl->tpl_vars['post']->value->description, 'UTF-8') > 250) {?>
                ... <a href="#">Continue reading >></a>
                <?php }?>
            </div>
        </div>
        <?php }?>
        <?php
$_smarty_tpl->tpl_vars['post'] = $foreach_post_Sav;
}
?>
        
        </div>
        <div>
            <ul class="pager">
                <li class="previous disabled"><a><span aria-hidden="true">&larr;</span> Older</a></li>
                <li class="next"><a href="/feed/1">Newer <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
        </div>
    </div>

    <div class="widgets" style="width: 25%">
        <div class="statistics">
            <span>
                6 <h6>Assignments due</h6>
            </span>
            <span>
                3 <h6>New Assignments</h6>
            </span>
        </div>

        <div>
            [ CALANDER ]
        </div>

        <div>
            [ FRIENDS ACTIVITIES ]
        </div>
    </div>
</div><?php }
}
?>