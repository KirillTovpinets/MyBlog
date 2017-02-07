<?php /* Smarty version 3.1.27, created on 2017-01-16 16:58:59
         compiled from "/home/s8169/www/manager/templates/default/element/snippet/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:12235899587cd1a382a398_42879644%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e36c3d37c03ec97aa799f8cc0f56bf765f1fc651' => 
    array (
      0 => '/home/s8169/www/manager/templates/default/element/snippet/create.tpl',
      1 => 1484572802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12235899587cd1a382a398_42879644',
  'variables' => 
  array (
    'onSnipFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587cd1a382b546_17600965',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587cd1a382b546_17600965')) {
function content_587cd1a382b546_17600965 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '12235899587cd1a382a398_42879644';
?>
<div id="modx-panel-snippet-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onSnipFormPrerender']->value;

}
}
?>