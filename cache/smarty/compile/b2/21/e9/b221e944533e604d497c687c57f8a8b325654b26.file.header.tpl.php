<?php /* Smarty version Smarty-3.1.13, created on 2013-07-11 00:18:45
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/paypal/views/templates/back/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:51334678851ddebd54d65d0-23092520%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b221e944533e604d497c687c57f8a8b325654b26' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/modules/paypal/views/templates/back/header.tpl',
      1 => 1373498324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '51334678851ddebd54d65d0-23092520',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PayPal_WPS' => 0,
    'PayPal_HSS' => 0,
    'PayPal_ECS' => 0,
    'PayPal_module_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ddebd5554f33_85351321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ddebd5554f33_85351321')) {function content_51ddebd5554f33_85351321($_smarty_tpl) {?><script type="text/javascript">
    var PayPal_WPS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_WPS']->value;?>
';
    var PayPal_HSS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_HSS']->value;?>
';
    var PayPal_ECS = '<?php echo $_smarty_tpl->tpl_vars['PayPal_ECS']->value;?>
';
</script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['PayPal_module_dir']->value;?>
/views/templates/back/back_office.js"></script><?php }} ?>