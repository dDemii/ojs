<?php
/* Smarty version 4.3.1, created on 2024-03-27 15:52:18
  from 'plugins-1-plugins-generic-customLocale-generic-customLocale:customLocaleTab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660440b2ee6b56_26120061',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4031a374f3d30318a776b3fe29f67b1faf79bff2' => 
    array (
      0 => 'plugins-1-plugins-generic-customLocale-generic-customLocale:customLocaleTab.tpl',
      1 => 1711466917,
      2 => 'plugins-1-plugins-generic-customLocale-generic-customLocale',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660440b2ee6b56_26120061 (Smarty_Internal_Template $_smarty_tpl) {
?><tab id="customLocale" label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"plugins.generic.customLocale.customLocale"),$_smarty_tpl ) );?>
">
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'customLocaleGridUrl', null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>(defined('ROUTE_COMPONENT') ? constant('ROUTE_COMPONENT') : null),'component'=>"plugins.generic.customLocale.controllers.grid.CustomLocaleGridHandler",'op'=>"fetchGrid",'escape'=>false),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_url_in_div'][0], array( array('id'=>"customLocaleGridContainer",'url'=>$_smarty_tpl->tpl_vars['customLocaleGridUrl']->value),$_smarty_tpl ) );?>

</tab>
<?php }
}
