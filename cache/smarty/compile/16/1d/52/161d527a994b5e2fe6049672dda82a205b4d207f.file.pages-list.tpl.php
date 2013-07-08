<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 18:59:39
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/mobile/pages-list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200281025751db0c1ba50673-39832872%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '161d527a994b5e2fe6049672dda82a205b4d207f' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/mobile/pages-list.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200281025751db0c1ba50673-39832872',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'controller_name' => 0,
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51db0c1bc5b372_80543470',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51db0c1bc5b372_80543470')) {function content_51db0c1bc5b372_80543470($_smarty_tpl) {?>

		<hr/>
		<h2 class="site_map"><?php echo smartyTranslate(array('s'=>'Sitemap'),$_smarty_tpl);?>
</h2>
		<ul data-role="listview" data-inset="true" id="category">
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='index'){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true);?>
" data-ajax="false">Accueil</a></li><?php }?>
			
			
			
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink(3,false);?>
" data-ajax="false">IPod</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getCategoryLink(4,false);?>
" data-ajax="false">Accessoires</a></li>
			
			
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='my-account'){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'My account'),$_smarty_tpl);?>
</a></li><?php }?>
			<?php if ($_smarty_tpl->tpl_vars['controller_name']->value!='contact'){?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true);?>
" data-ajax="false"><?php echo smartyTranslate(array('s'=>'Contact'),$_smarty_tpl);?>
</a></li><?php }?>
		</ul>
<?php }} ?>