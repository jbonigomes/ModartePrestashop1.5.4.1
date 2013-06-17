<?php /*%%SmartyHeaderCode:74948951251bf77f18e31d5-08741462%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c9a36bcfbca8dd731cba53af36dcf5f7a0ef46c' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/modules/blockmyaccountfooter/blockmyaccountfooter.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74948951251bf77f18e31d5-08741462',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf788a8388d5_05454471',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf788a8388d5_05454471')) {function content_51bf788a8388d5_05454471($_smarty_tpl) {?>
<!-- Block myaccount module -->
<div class="block myaccount">
	<p class="title_block"><a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?controller=my-account" title="Manage my customer account" rel="nofollow">My account</a></p>
	<div class="block_content">
		<ul class="bullet">
			<li><a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?controller=history" title="My orders" rel="nofollow">My orders</a></li>
						<li><a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?controller=order-slip" title="My credit slips" rel="nofollow">My credit slips</a></li>
			<li><a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?controller=addresses" title="My addresses" rel="nofollow">My addresses</a></li>
			<li><a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?controller=identity" title="Manage my personal information" rel="nofollow">My personal info</a></li>
						
<li class="favoriteproducts">
	<a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?fc=module&amp;module=favoriteproducts&amp;controller=account" title="My favorite products.">
				My favorite products.
	</a>
</li>

		</ul>
		<p class="logout"><a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?mylogout" title="Sign out" rel="nofollow">Sign out</a></p>
	</div>
</div>
<!-- /Block myaccount module -->
<?php }} ?>