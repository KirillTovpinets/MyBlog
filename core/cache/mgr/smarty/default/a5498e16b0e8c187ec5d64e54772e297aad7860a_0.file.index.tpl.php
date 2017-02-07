<?php /* Smarty version 3.1.27, created on 2017-01-16 16:21:02
         compiled from "/home/s8169/www/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:110650263587cc8bec69f84_94481866%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a5498e16b0e8c187ec5d64e54772e297aad7860a' => 
    array (
      0 => '/home/s8169/www/manager/templates/default/workspaces/index.tpl',
      1 => 1484572802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '110650263587cc8bec69f84_94481866',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587cc8bec6dd38_96589130',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587cc8bec6dd38_96589130')) {
function content_587cc8bec6dd38_96589130 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '110650263587cc8bec69f84_94481866';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>