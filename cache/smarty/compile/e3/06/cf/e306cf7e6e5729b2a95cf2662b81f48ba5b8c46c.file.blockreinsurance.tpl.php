<?php /* Smarty version Smarty-3.1.13, created on 2013-07-08 20:23:37
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/blockreinsurance/blockreinsurance.tpl" */ ?>
<?php /*%%SmartyHeaderCode:149231645051db11b9295042-62237044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e306cf7e6e5729b2a95cf2662b81f48ba5b8c46c' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/blockreinsurance/blockreinsurance.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '149231645051db11b9295042-62237044',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'nbblocks' => 0,
    'module_dir' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51db11b92f7c82_99663152',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51db11b92f7c82_99663152')) {function content_51db11b92f7c82_99663152($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/tools/smarty/plugins/modifier.escape.php';
?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0){?>
<!-- MODULE Block reinsurance -->
<div id="reinsurance_block" class="clearfix">
	<ul class="width<?php echo $_smarty_tpl->tpl_vars['nbblocks']->value;?>
">	
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value){
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<li><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
img/<?php echo $_smarty_tpl->tpl_vars['info']->value['file_name'];?>
" alt="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
" /> <span><?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['info']->value['text'], 'html', 'UTF-8');?>
</span></li>
		<?php } ?>
	</ul>
</div>
<!-- /MODULE Block reinsurance -->
<?php }?><?php }} ?>