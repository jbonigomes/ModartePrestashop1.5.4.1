<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 20:26:21
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/blockadvertising/blockadvertising.tpl" */ ?>
<?php /*%%SmartyHeaderCode:99308481751db125d840ea7-03327333%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '81d4348e32c92a6754d882a85f73dca2ef590c3a' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/blockadvertising/blockadvertising.tpl',
      1 => 1366896190,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99308481751db125d840ea7-03327333',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'adv_link' => 0,
    'adv_title' => 0,
    'image' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51db125d865978_10170686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51db125d865978_10170686')) {function content_51db125d865978_10170686($_smarty_tpl) {?>

<!-- MODULE Block advertising -->
<div class="advertising_block">
	<a href="<?php echo $_smarty_tpl->tpl_vars['adv_link']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['adv_title']->value;?>
" width="155"  height="163" /></a>
</div>
<!-- /MODULE Block advertising -->
<?php }} ?>