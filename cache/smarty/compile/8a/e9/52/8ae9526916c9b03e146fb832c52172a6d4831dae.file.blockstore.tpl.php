<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 20:26:21
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/modarte/modules/blockstore/blockstore.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155278790851db125dda0d60-10371762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ae9526916c9b03e146fb832c52172a6d4831dae' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/modarte/modules/blockstore/blockstore.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '155278790851db125dda0d60-10371762',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'module_dir' => 0,
    'store_img' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51db125de02028_42560729',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51db125de02028_42560729')) {function content_51db125de02028_42560729($_smarty_tpl) {?>

<!-- Block stores module -->
<div id="stores_block_left" class="block">
	<p class="title_block"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a></p>
	<div class="block_content blockstore">
		<p class="store_image"><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
<?php echo $_smarty_tpl->tpl_vars['store_img']->value;?>
" alt="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
" width="174" height="115" /></a></p>
		<p>
			<a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('stores');?>
" title="<?php echo smartyTranslate(array('s'=>'Our stores','mod'=>'blockstore'),$_smarty_tpl);?>
">&raquo; <?php echo smartyTranslate(array('s'=>'Discover our stores','mod'=>'blockstore'),$_smarty_tpl);?>
</a>
		</p>
	</div>
</div>
<!-- /Block stores module -->
<?php }} ?>