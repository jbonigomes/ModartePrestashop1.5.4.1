<?php /* Smarty version Smarty-3.1.13, created on 2013-07-10 19:56:48
         compiled from "/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/adminmod/themes/default/template/controllers/countries/helpers/list/list_footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68849827451ddae702c8937-05085304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7afbb6e63e35f44674a8dfae9ba77672abb21ca0' => 
    array (
      0 => '/Users/jbonigomes/Desktop/projects/ModartePrestashop1.5.4.1/adminmod/themes/default/template/controllers/countries/helpers/list/list_footer.tpl',
      1 => 1366896186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68849827451ddae702c8937-05085304',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'bulk_actions' => 0,
    'key' => 0,
    'params' => 0,
    'zones' => 0,
    'z' => 0,
    'table' => 0,
    'token' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51ddae7043aca5_31966193',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51ddae7043aca5_31966193')) {function content_51ddae7043aca5_31966193($_smarty_tpl) {?>

			</table>
			<?php if ($_smarty_tpl->tpl_vars['bulk_actions']->value){?>
				<p>
					<?php if (count($_smarty_tpl->tpl_vars['bulk_actions']->value)>1){?>
						<select id="select_submitBulk" name="select_submitBulk">
							<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bulk_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['params']->value['text'];?>
</option>
							<?php } ?>
						</select>
						<input type="submit" class="button" name="submitBulk" id="submitBulk" value="<?php echo smartyTranslate(array('s'=>'Apply'),$_smarty_tpl);?>
" />
					<?php }else{ ?>
						<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bulk_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
							<?php if ($_smarty_tpl->tpl_vars['key']->value=='affectzone'){?>
								<select id="zone_to_affect" name="zone_to_affect">
									<?php  $_smarty_tpl->tpl_vars['z'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['z']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['zones']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['z']->key => $_smarty_tpl->tpl_vars['z']->value){
$_smarty_tpl->tpl_vars['z']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['z']->value['id_zone'];?>
"><?php echo $_smarty_tpl->tpl_vars['z']->value['name'];?>
</option>
									<?php } ?>
								</select>
							<?php }?>
							<input type="submit" class="button" name="submitBulk<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['params']->value['text'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['params']->value['confirm'])){?>onclick="return confirm('<?php echo $_smarty_tpl->tpl_vars['params']->value['confirm'];?>
');"<?php }?> />
						<?php } ?>
					<?php }?>
				</p>
			<?php }?>
		</td>
	</tr>
</table>
<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
" />
</form>

<script type="text/javascript">
	var confirmation = new Array();
	<?php  $_smarty_tpl->tpl_vars['params'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['params']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['bulk_actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['params']->key => $_smarty_tpl->tpl_vars['params']->value){
$_smarty_tpl->tpl_vars['params']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['params']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['params']->value['confirm'])){?>
			confirmation['<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
'] = "<?php echo $_smarty_tpl->tpl_vars['params']->value['confirm'];?>
";
		<?php }?>
	<?php } ?>

	$(document).ready(function(){
		<?php if (count($_smarty_tpl->tpl_vars['bulk_actions']->value)>1){?>
			$('#submitBulk').click(function(){
				if (confirmation[$(this).val()])
					return confirm(confirmation[$(this).val()]);
				else
					return true;
			});
			$('#select_submitBulk').change(function(){
				if ($(this).val() == 'affectzone')
					loadZones();
				else if (loaded)
					$('#zone_to_affect').fadeOut('slow');
			});
		<?php }?>
	});
	var loaded = false;
	function loadZones()
	{
		if (!loaded)
		{
			$.ajax({
				type: 'POST',
				url: 'ajax.php',
				data: 'getZones=true&token=<?php echo $_smarty_tpl->tpl_vars['token']->value;?>
',
				async : true,
				cache: false,
				dataType: 'json',
				success: function(data) {
					var html = $(data);
					html.hide();
					$('#select_submitBulk').after(html);
					html.fadeIn('slow');
				}
			});
			loaded = true;
		}
		else
		{
			$('#zone_to_affect').fadeIn('slow');
		}
	}
</script><?php }} ?>