<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 20:54:48
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/mobile/shopping-cart-gift-line.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144039019451bf779800de89-32895637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0599ca2fa8ec18c803ad3db9a80593af2dc8d070' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/mobile/shopping-cart-gift-line.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144039019451bf779800de89-32895637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'product' => 0,
    'link' => 0,
    'priceDisplay' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf7798392635_99632767',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf7798392635_99632767')) {function content_51bf7798392635_99632767($_smarty_tpl) {?>

<input type="hidden" name="cart_product_id[]" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
"/>
<input type="hidden" id="cart_product_attribute_id_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_product_attribute']);?>
"/>
<input type="hidden" id="cart_product_address_delivery_id_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id_address_delivery'];?>
"/>

<div class="fl width-20">
	<img src="<?php echo $_smarty_tpl->tpl_vars['link']->value->getImageLink($_smarty_tpl->tpl_vars['product']->value['link_rewrite'],$_smarty_tpl->tpl_vars['product']->value['id_image'],'small_default');?>
" class="img_product_cart" />
</div>
<div class="fl width-60 padding-left-5px">
	<h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
	<?php if ($_smarty_tpl->tpl_vars['product']->value['reference']){?><p><?php echo smartyTranslate(array('s'=>'Ref:'),$_smarty_tpl);?>
 <?php echo $_smarty_tpl->tpl_vars['product']->value['reference'];?>
</p><?php }?>
	<p><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</p>
</div>
<div class="fl width-15" style="text-align:right">
	<p class="price" id="product_price_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product'];?>
_<?php echo $_smarty_tpl->tpl_vars['product']->value['id_product_attribute'];?>
_<?php echo intval($_smarty_tpl->tpl_vars['product']->value['id_address_delivery']);?>
<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])){?>_gift<?php }?>" style="padding-top:20px">
		<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['gift'])){?>
			<h3 class="gift-icon" style="background-color:#0088CC;color:white;display:inline;padding:2px 14px;-webkit-border-radius:6px;border-radius:6px;font-weight:normal"><?php echo smartyTranslate(array('s'=>'Gift!'),$_smarty_tpl);?>
</h3>
		<?php }else{ ?>
			<?php if (isset($_smarty_tpl->tpl_vars['product']->value['is_discounted'])&&$_smarty_tpl->tpl_vars['product']->value['is_discounted']){?>
				<span style="text-decoration:line-through;"><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_without_specific_price']),$_smarty_tpl);?>
</span><br />
			<?php }?>
			<?php if (!$_smarty_tpl->tpl_vars['priceDisplay']->value){?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price_wt']),$_smarty_tpl);?>

			<?php }else{ ?>
				<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['convertPrice'][0][0]->convertPrice(array('price'=>$_smarty_tpl->tpl_vars['product']->value['price']),$_smarty_tpl);?>

			<?php }?>
		<?php }?>
	</p>
</div><?php }} ?>