<?php
/* Smarty version 4.3.1, created on 2024-01-28 16:22:31
  from 'C:\xampp\htdocs\prestashop\modules\ps_facetedsearch\views\templates\hook\attribute_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_65b61cd7b012b3_55266264',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ec837373aa70e6f359bdd04679dbb8da42a554c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prestashop\\modules\\ps_facetedsearch\\views\\templates\\hook\\attribute_form.tpl',
      1 => 1706346430,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65b61cd7b012b3_55266264 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="form-group">
	<label class="control-label col-lg-4">
		<span class="label-tooltip" data-toggle="tooltip" data-html="true" title="" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Invalid characters: <>;=#{}_','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'URL','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</span>
	</label>
	<div class="col-lg-8">
		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			  <div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['default_form_language']->value) {?>block<?php } else { ?>none<?php }?>;">
				  <div class="col-lg-9">
					  <input type="text" size="64" name="url_name_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['url_name']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['url_name'],'htmlall','UTF-8' ));
}?>" />
				  </div>
				  <div class="col-lg-2">
					  <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						  <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						  <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						    <li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
						  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					  </ul>
				  </div>
			  </div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="col-lg-9">
				<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When the Faceted Search module is enabled, you can get more detailed URLs by choosing the word that best represent this attribute. By default, PrestaShop uses the attribute\'s name, but you can change that setting using this field.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
			</div>
		</div>
	</div>
</div>
<div class="form-group">
	<label class="control-label col-lg-4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Meta title','d'=>'Admin.Global'),$_smarty_tpl ) );?>
</label>
	<div class="col-lg-8">
		<div class="row">
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
			  <div class="translatable-field lang-<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" style="display: <?php if ($_smarty_tpl->tpl_vars['language']->value['id_lang'] == $_smarty_tpl->tpl_vars['default_form_language']->value) {?>block<?php } else { ?>none<?php }?>;">
				  <div class="col-lg-9">
					  <input type="text" size="70" name="meta_title_<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']])) && (isset($_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['meta_title']))) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['values']->value[$_smarty_tpl->tpl_vars['language']->value['id_lang']]['meta_title'],'htmlall','UTF-8' ));
}?>" />
				  </div>
				  <div class="col-lg-2">
					  <button type="button" class="btn btn-default dropdown-toggle" tabindex="-1" data-toggle="dropdown">
						  <?php echo $_smarty_tpl->tpl_vars['language']->value['iso_code'];?>

						  <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
						  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['languages']->value, 'language');
$_smarty_tpl->tpl_vars['language']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->do_else = false;
?>
						    <li><a href="javascript:hideOtherLanguage(<?php echo $_smarty_tpl->tpl_vars['language']->value['id_lang'];?>
);" tabindex="-1"><?php echo $_smarty_tpl->tpl_vars['language']->value['name'];?>
</a></li>
						  <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					  </ul>
				  </div>
			  </div>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			<div class="col-lg-9">
				<p class="help-block"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'When the Faceted Search module is enabled, you can get more detailed page titles by choosing the word that best represent this attribute. By default, PrestaShop uses the attribute\'s name, but you can change that setting using this field.','d'=>'Modules.Facetedsearch.Admin'),$_smarty_tpl ) );?>
</p>
			</div>
		</div>
	</div>
</div>
<?php }
}
