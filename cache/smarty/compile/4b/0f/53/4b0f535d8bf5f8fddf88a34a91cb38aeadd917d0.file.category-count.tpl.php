<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 21:41:07
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/modarte/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156169217051db23e3c3b656-53921344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4b0f535d8bf5f8fddf88a34a91cb38aeadd917d0' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/modarte/category-count.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156169217051db23e3c3b656-53921344',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51db23e3c92e72_24021414',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51db23e3c92e72_24021414')) {function content_51db23e3c92e72_24021414($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['category']->value->id==1||$_smarty_tpl->tpl_vars['nb_products']->value==0){?>
	<?php echo smartyTranslate(array('s'=>'There are no products in  this category'),$_smarty_tpl);?>

<?php }else{ ?>
	<?php if ($_smarty_tpl->tpl_vars['nb_products']->value==1){?>
		<?php echo smartyTranslate(array('s'=>'There is %d product.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }else{ ?>
		<?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>

	<?php }?>
<?php }?><?php }} ?>