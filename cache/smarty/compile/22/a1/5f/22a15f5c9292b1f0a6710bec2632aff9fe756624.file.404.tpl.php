<?php /* Smarty version Smarty-3.1.13, created on 2013-06-17 20:54:28
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/mobile/404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:96408410551bf778420cee4-47928455%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '22a15f5c9292b1f0a6710bec2632aff9fe756624' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/mobile/404.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '96408410551bf778420cee4-47928455',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'base_dir' => 0,
    'img_mobile_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf77842d9ea9_71300455',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf77842d9ea9_71300455')) {function content_51bf77842d9ea9_71300455($_smarty_tpl) {?>

<?php $_smarty_tpl->_capture_stack[0][] = array('default', 'page_title', null); ob_start(); ?><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
<?php echo $_smarty_tpl->getSubTemplate ('./page-title.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


	
	
	<div data-role="content" id="content">
		<div id="not_found">
			<p><?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>
</p>
			<p><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</p>
			<div data-role="fieldcontain" class="input_search_404">
				<form action="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('search');?>
" method="post" class="std">
				<input type="search" name="search_query" id="search_query" value="<?php echo smartyTranslate(array('s'=>'Search'),$_smarty_tpl);?>
" />
				</form>
			</div>
			<p>
				<a href="<?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
" class="lnk_my-account_home" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" data-ajax="false">
					<img class="" alt="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
" src="<?php echo $_smarty_tpl->tpl_vars['img_mobile_dir']->value;?>
icon/home.png">
					<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>

				</a>
			</p>
		</div>
	
	</div><!-- /content -->
<?php }} ?>