<?php /* Smarty version Smarty-3.1.13, created on 2013-07-16 23:58:01
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/feeder/feederHeader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:181953556251e5cff91afe23-89396146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3efff2fc3571501c8394b162488c3de45a391e18' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/feeder/feederHeader.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '181953556251e5cff91afe23-89396146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'meta_title' => 0,
    'feedUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51e5cff924d678_18952526',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51e5cff924d678_18952526')) {function content_51e5cff924d678_18952526($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/tools/smarty/plugins/modifier.escape.php';
?>

<link rel="alternate" type="application/rss+xml" title="<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['meta_title']->value, 'html', 'UTF-8');?>
" href="<?php echo $_smarty_tpl->tpl_vars['feedUrl']->value;?>
" /><?php }} ?>