<?php /* Smarty version Smarty-3.1.13, created on 2013-07-16 22:34:04
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157026391351e5bc4c2c7c39-39669319%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf52d5c266f0d3078c321a4aa5a593d6d7f8affa' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/paypal/views/templates/hook/express_checkout_shortcut_form.tpl',
      1 => 1373498324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157026391351e5bc4c2c7c39-39669319',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'base_dir_ssl' => 0,
    'PayPal_payment_type' => 0,
    'PayPal_current_page' => 0,
    'PayPal_tracking_code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e5bc4c303ff3_58471859',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e5bc4c303ff3_58471859')) {function content_51e5bc4c303ff3_58471859($_smarty_tpl) {?><form id="paypal_payment_form" action="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/express_checkout/payment.php" data-ajax="false" title="<?php echo smartyTranslate(array('s'=>'Pay with PayPal','mod'=>'paypal'),$_smarty_tpl);?>
" method="post" data-ajax="false">
	<?php if (isset($_GET['id_product'])){?><input type="hidden" name="id_product" value="<?php echo $_GET['id_product'];?>
" /><?php }?>
	
	<!-- Change dynamicaly when the form is submitted -->
	<input type="hidden" name="quantity" value="1" />
	<input type="hidden" name="id_p_attr" value="" />
	<input type="hidden" name="express_checkout" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_payment_type']->value;?>
"/>
	<input type="hidden" name="current_shop_url" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_current_page']->value;?>
" />
	<input type="hidden" name="bn" value="<?php echo $_smarty_tpl->tpl_vars['PayPal_tracking_code']->value;?>
" />
</form>
<?php }} ?>