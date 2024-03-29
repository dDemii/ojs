<?php
/* Smarty version 4.3.1, created on 2024-03-27 16:10:33
  from 'app:controllersgridissuesissue.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660444f9d8b889_00792814',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0f9a7c541a3c4519e7467068ee7b3a41c7b5c2b' => 
    array (
      0 => 'app:controllersgridissuesissue.tpl',
      1 => 1708709375,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660444f9d8b889_00792814 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript">
	// Attach the JS file tab handler.
	$(function() {
		$('#editIssueTabs').pkpHandler('$.pkp.controllers.TabHandler');
	});
<?php echo '</script'; ?>
>
<div id="editIssueTabs">
	<ul>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'op'=>"issueToc",'issueId'=>$_smarty_tpl->tpl_vars['issueId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"issue.toc"),$_smarty_tpl ) );?>
</a></li>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'op'=>"editIssueData",'issueId'=>$_smarty_tpl->tpl_vars['issueId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.issues.issueData"),$_smarty_tpl ) );?>
</a></li>
		<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'op'=>"issueGalleys",'issueId'=>$_smarty_tpl->tpl_vars['issueId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.issues.galleys"),$_smarty_tpl ) );?>
</a></li>
		<?php if ($_smarty_tpl->tpl_vars['enableIdentifiers']->value) {?>
			<li id="identifiersTab"><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'op'=>"identifiers",'issueId'=>$_smarty_tpl->tpl_vars['issueId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.issues.identifiers"),$_smarty_tpl ) );?>
</a></li>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['currentJournal']->value->getData('publishingMode') == \APP\journal\Journal::PUBLISHING_MODE_SUBSCRIPTION) {?>
			<li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('router'=>\PKP\core\PKPApplication::ROUTE_COMPONENT,'op'=>"access",'issueId'=>$_smarty_tpl->tpl_vars['issueId']->value),$_smarty_tpl ) );?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.issues.access"),$_smarty_tpl ) );?>
</a></li>
		<?php }?>
	</ul>
</div>
<?php }
}
