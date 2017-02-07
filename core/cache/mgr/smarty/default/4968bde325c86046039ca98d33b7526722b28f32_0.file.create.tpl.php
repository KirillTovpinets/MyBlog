<?php /* Smarty version 3.1.27, created on 2017-01-16 16:47:51
         compiled from "/home/s8169/www/manager/templates/default/element/chunk/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1862253665587ccf07c08259_05397413%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4968bde325c86046039ca98d33b7526722b28f32' => 
    array (
      0 => '/home/s8169/www/manager/templates/default/element/chunk/create.tpl',
      1 => 1484572802,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1862253665587ccf07c08259_05397413',
  'variables' => 
  array (
    'onChunkFormPrerender' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587ccf07c08fa1_19894032',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587ccf07c08fa1_19894032')) {
function content_587ccf07c08fa1_19894032 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1862253665587ccf07c08259_05397413';
?>
<div id="modx-panel-chunk-div"></div>
<?php echo $_smarty_tpl->tpl_vars['onChunkFormPrerender']->value;

}
}
?>