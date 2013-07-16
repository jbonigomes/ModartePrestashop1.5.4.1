<?php /* Smarty version Smarty-3.1.13, created on 2013-07-16 22:34:04
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/paypal/views/templates/hook/express_checkout_shortcut_button.tpl" */ ?>
<?php /*%%SmartyHeaderCode:100136320051e5bc4c2606a2-60784323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd1d8ac03b24b371581b1076b37ba8021d34f169e' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/paypal/views/templates/hook/express_checkout_shortcut_button.tpl',
      1 => 1373498324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100136320051e5bc4c2606a2-60784323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'use_mobile' => 0,
    'base_dir_ssl' => 0,
    'PayPal_lang_code' => 0,
    'include_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e5bc4c2a7da0_67856816',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e5bc4c2a7da0_67856816')) {function content_51e5bc4c2a7da0_67856816($_smarty_tpl) {?><div id="container_express_checkout" style="float:right; margin: 10px 40px 0 0">
	<?php if (isset($_smarty_tpl->tpl_vars['use_mobile']->value)&&$_smarty_tpl->tpl_vars['use_mobile']->value){?>
		<div style="margin-left:30px">
			<img id="payment_paypal_express_checkout" src="<?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
modules/paypal/img/logos/express_checkout_mobile/CO_<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
_orange_295x43.png" alt="" />
		</div>
	<?php }else{ ?>
		<img id="payment_paypal_express_checkout" src="https://www.paypal.com/<?php echo $_smarty_tpl->tpl_vars['PayPal_lang_code']->value;?>
/i/btn/btn_xpressCheckout.gif" alt="" />
	<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['include_form']->value)&&$_smarty_tpl->tpl_vars['include_form']->value){?>
		<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['template_dir']->value)."./express_checkout_shortcut_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	<?php }?>
</div>
<div class="clearfix"></div>
<?php }} ?>