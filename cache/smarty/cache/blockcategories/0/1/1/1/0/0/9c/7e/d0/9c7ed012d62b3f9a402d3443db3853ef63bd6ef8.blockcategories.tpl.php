<?php /*%%SmartyHeaderCode:148237012151bf77f1114977-53755583%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9c7ed012d62b3f9a402d3443db3853ef63bd6ef8' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/modules/blockcategories/blockcategories.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
    'e42b2d4ca5730995660e248f3e88f608d1374b21' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/themes/default/modules/blockcategories/category-tree-branch.tpl',
      1 => 1366896192,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148237012151bf77f1114977-53755583',
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51bf788a4d1d37_77452687',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51bf788a4d1d37_77452687')) {function content_51bf788a4d1d37_77452687($_smarty_tpl) {?>
<!-- Block categories module -->
<div id="categories_block_left" class="block">
	<p class="title_block">Categories</p>
	<div class="block_content">
		<ul class="tree dhtml">
									
<li >
	<a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?id_category=3&amp;controller=category"  title="Now that you can buy movies from the iTunes Store and sync them to your iPod, the whole world is your theater.">iPods</a>
	</li>

												
<li >
	<a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?id_category=4&amp;controller=category"  title="Wonderful accessories for your iPod">Accessories</a>
	</li>

												
<li class="last">
	<a href="http://localhost:8888/ModartePrestashop1.5.4.1/index.php?id_category=5&amp;controller=category"  title="The latest Intel processor, a bigger hard drive, plenty of memory, and even more new features all fit inside just one liberating inch. The new Mac laptops have the performance, power, and connectivity of a desktop computer. Without the desk part.">Laptops</a>
	</li>

							</ul>
		
		<script type="text/javascript">
		// <![CDATA[
			// we hide the tree only if JavaScript is activated
			$('div#categories_block_left ul.dhtml').hide();
		// ]]>
		</script>
	</div>
</div>
<!-- /Block categories module -->
<?php }} ?>