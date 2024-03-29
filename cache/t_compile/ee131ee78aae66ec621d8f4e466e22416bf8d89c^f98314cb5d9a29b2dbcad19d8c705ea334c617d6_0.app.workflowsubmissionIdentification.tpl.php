<?php
/* Smarty version 4.3.1, created on 2024-03-27 15:53:26
  from 'app:workflowsubmissionIdentification.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660440f6f2e487_11966513',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f98314cb5d9a29b2dbcad19d8c705ea334c617d6' => 
    array (
      0 => 'app:workflowsubmissionIdentification.tpl',
      1 => 1708709445,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660440f6f2e487_11966513 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="pkpWorkflow__identificationId">
	{{ submission.id }}
</span>
<span class="pkpWorkflow__identificationDivider">
	/
</span>


<span v-if="currentPublication.authorsStringShort" class="pkpWorkflow__identificationAuthor">
	{{ currentPublication.authorsStringShort }}
</span>
<span v-if="currentPublication.authorsStringShort" class="pkpWorkflow__identificationDivider">
	/
</span>


<span 
	class="pkpWorkflow__identificationTitle" 
	v-strip-unsafe-html="localizeSubmission(currentPublication.fullTitle, currentPublication.locale)"
>
</span><?php }
}
