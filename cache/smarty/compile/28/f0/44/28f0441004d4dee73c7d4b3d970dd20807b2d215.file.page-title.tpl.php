<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 20:54:42
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/mobile/page-title.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20461748151bf7792199957-65794376%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28f0441004d4dee73c7d4b3d970dd20807b2d215' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/mobile/page-title.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20461748151bf7792199957-65794376',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page_title' => 0,
    'meta_title' => 0,
    'shop_name' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf779226cb65_10659190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf779226cb65_10659190')) {function content_51bf779226cb65_10659190($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/tools/smarty/plugins/modifier.escape.php';
?><?php if (!isset($_smarty_tpl->tpl_vars['page_title']->value)&&isset($_smarty_tpl->tpl_vars['meta_title']->value)&&$_smarty_tpl->tpl_vars['meta_title']->value!=$_smarty_tpl->tpl_vars['shop_name']->value){?>
	<?php $_smarty_tpl->tpl_vars['page_title'] = new Smarty_variable(smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'htmlall', 'UTF-8'), null, 0);?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['page_title']->value)){?>
	<div data-role="header" class="clearfix navbartop" data-position="inline">
		<h1><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</h1>
	</div><!-- /navbartop -->
<?php }?><?php }} ?>