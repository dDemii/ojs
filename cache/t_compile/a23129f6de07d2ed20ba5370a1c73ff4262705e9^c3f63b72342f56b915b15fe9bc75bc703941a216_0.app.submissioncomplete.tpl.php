<?php
/* Smarty version 4.3.1, created on 2024-03-27 16:17:46
  from 'app:submissioncomplete.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660446aae5ac79_08695952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3f63b72342f56b915b15fe9bc75bc703941a216' => 
    array (
      0 => 'app:submissioncomplete.tpl',
      1 => 1708709445,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660446aae5ac79_08695952 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1067304591660446aae48262_57673883', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_1067304591660446aae48262_57673883 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_1067304591660446aae48262_57673883',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<h1 class="app__pageHeading app__pageHeading--center app__pageHeading--spacious">
		<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.submissionComplete"),$_smarty_tpl ) );?>

	</h1>

    <div class="app__contentPanel">
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.description"),$_smarty_tpl ) );?>
</p>
        <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.forNow"),$_smarty_tpl ) );?>
</p>
        <ul>
            <li><a href=<?php echo $_smarty_tpl->tpl_vars['workflowUrl']->value;?>
><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.review"),$_smarty_tpl ) );?>
</a></li>
            <li><a href=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submission"),$_smarty_tpl ) );?>
><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.create"),$_smarty_tpl ) );?>
</a></li>
            <li><a href=<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('page'=>"submissions"),$_smarty_tpl ) );?>
><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"submission.submit.whatNext.return"),$_smarty_tpl ) );?>
</a></li>
        </ul>
    </div>

<?php
}
}
/* {/block "page"} */
}
