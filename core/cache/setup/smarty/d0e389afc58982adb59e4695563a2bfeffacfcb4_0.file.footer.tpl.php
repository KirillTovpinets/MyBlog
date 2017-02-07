<?php /* Smarty version 3.1.27, created on 2017-01-16 16:20:04
         compiled from "/home/s8169/www/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:361391126587cc884c6c559_01176403%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e389afc58982adb59e4695563a2bfeffacfcb4' => 
    array (
      0 => '/home/s8169/www/setup/templates/footer.tpl',
      1 => 1484572177,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '361391126587cc884c6c559_01176403',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587cc884c72cf8_25413468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587cc884c72cf8_25413468')) {
function content_587cc884c72cf8_25413468 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/home/s8169/www/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '361391126587cc884c6c559_01176403';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>