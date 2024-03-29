<?php
/* Smarty version 4.3.1, created on 2024-03-27 16:13:39
  from 'app:submissionstart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660445b3d1d234_32068247',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1181edaca862400c930883d415bbda6bb1924fe' => 
    array (
      0 => 'app:submissionstart.tpl',
      1 => 1708709445,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660445b3d1d234_32068247 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1149885117660445b3d007f0_67818765', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_1149885117660445b3d007f0_67818765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_1149885117660445b3d007f0_67818765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading app__pageHeading--center app__pageHeading--spacious">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.wizard.title"),$_smarty_tpl ) );?>

	</h1>

	<?php if ($_smarty_tpl->tpl_vars['currentContext']->value->getData('disableSubmissions')) {?>
		<notification>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"manager.setup.disableSubmissions.notAccepting"),$_smarty_tpl ) );?>

		</notification>
	<?php } else { ?>
		<panel>
			<panel-section>
				<start-submission-form
					class="startSubmissionPage__form"
					v-bind="form"
					@set="updateForm"
				></start-submission-form>
			</panel-section>
		</panel>
	<?php }
}
}
/* {/block "page"} */
}
