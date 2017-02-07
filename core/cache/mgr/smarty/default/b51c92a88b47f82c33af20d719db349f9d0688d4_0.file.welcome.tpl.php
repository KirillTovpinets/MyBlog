<?php /* Smarty version 3.1.27, created on 2017-01-16 16:20:30
         compiled from "/home/s8169/www/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1508262058587cc89ef307e4_41378201%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b51c92a88b47f82c33af20d719db349f9d0688d4' => 
    array (
      0 => '/home/s8169/www/manager/templates/default/welcome.tpl',
      1 => 1484572802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1508262058587cc89ef307e4_41378201',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587cc89ef31bb1_87567343',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587cc89ef31bb1_87567343')) {
function content_587cc89ef31bb1_87567343 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1508262058587cc89ef307e4_41378201';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>