<?php
/* Smarty version 4.3.1, created on 2024-03-27 16:09:07
  from 'app:decisionrecord.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_660444a38db379_05165815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba2fbd63bf105c94c661714e610b29f9c22854a' => 
    array (
      0 => 'app:decisionrecord.tpl',
      1 => 1708709445,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_660444a38db379_05165815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1729195285660444a38970c6_63176832', "page");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layouts/backend.tpl");
}
/* {block "page"} */
class Block_1729195285660444a38970c6_63176832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page' => 
  array (
    0 => 'Block_1729195285660444a38970c6_63176832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<div class="app__page--decision">
		<h1 class="app__pageHeading" ref="pageTitle">
			<template v-if="steps.length > 1">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['decisionType']->value->getLabel()),$_smarty_tpl ) ) ));?>

				{{ currentStep.name }}
			</template>
			<template v-else>
				<?php echo $_smarty_tpl->tpl_vars['decisionType']->value->getLabel();?>

			</template>
		</h1>
		<p class="app__pageDescription">
			<?php echo $_smarty_tpl->tpl_vars['decisionType']->value->getDescription();?>

		</p>

		<notification
			v-for="(error, stepId) in errors"
			:key="stepId"
			type="warning"
			class="decision__error"
			role="alert"
		>
			{{ error }}
			<button class="-linkButton" @click="openStep(stepId)">
				<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.viewError"),$_smarty_tpl ) ) ));?>

			</button>
		</notification>

		<steps
			v-if="steps.length"
			:current="currentStep.id"
			:started-steps="startedSteps"
			label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.decision.completeSteps"),$_smarty_tpl ) ) ));?>
"
			progress-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.showingSteps"),$_smarty_tpl ) );?>
"
			:scroll-to="$refs.pageTitle"
			show-steps-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.showAllSteps"),$_smarty_tpl ) ) ));?>
"
			@step:open="openStep"
		>
			<step
				v-for="step in steps"
				:key="step.id"
				:id="step.id"
				:label="step.name"
			>
				<panel class="decision__stepPanel">
					<panel-section class="decision__stepHeader">
						<h2>{{ step.name }}</h2>
						<p>{{ step.description }}</p>
					</panel-section>
					<template v-if="step.type === 'form'">
						<panel-section>
							<pkp-form v-bind="step.form" @set="updateStep"></pkp-form>
						</panel-section>
					</template>
					<template v-else-if="step.type === 'email'">
						<panel-section v-if="skippedSteps.includes(step.id)">
							<notification type="warning">
								<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.decision.emailSkipped"),$_smarty_tpl ) ) ));?>

								<button
									class="-linkButton"
									:disabled="isSubmitting"
									@click="toggleSkippedStep(step.id)"
								>
									<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.decision.dontSkipEmail"),$_smarty_tpl ) ) ));?>

								</button>
							</notification>
						</panel-section>
						<panel-section v-else>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "attachedFilesLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.attachedFiles"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "bccLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"email.bcc"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "ccLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"email.cc"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "subjectLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"email.subject"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "switchTolabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.switchTo"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "recipientsLabel", null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"email.to"),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
							<composer
								add-c-c-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.addCCBCC"),$_smarty_tpl ) ) ));?>
"
								attach-files-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.attachFiles"),$_smarty_tpl ) ) ));?>
"
								attached-files-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['attachedFilesLabel']->value),$_smarty_tpl ) ) ));?>
"
								:attachers="step.attachers"
								:attachments="step.attachments"
								:bcc="step.bcc"
								bcc-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['bccLabel']->value),$_smarty_tpl ) ) ));?>
"
								:body="step.body"
								body-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"stageParticipants.notify.message"),$_smarty_tpl ) ) ));?>
"
								:can-change-recipients="step.canChangeRecipients"
								:cc="step.cc"
								cc-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['ccLabel']->value),$_smarty_tpl ) ) ));?>
"
								confirm-switch-locale-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"email.confirmSwitchLocale"),$_smarty_tpl ) ) ));?>
"
								deselect-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.deselect"),$_smarty_tpl ) ) ));?>
"
								:email-templates="step.emailTemplates"
								:email-templates-api-url="emailTemplatesApiUrl"
								:errors="step.errors"
								find-template-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.findTemplate"),$_smarty_tpl ) ) ));?>
"
								:id="step.id"
								:initial-template-key="step.initialTemplateKey"
								insert-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.insert"),$_smarty_tpl ) ) ));?>
"
								insert-modal-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.insertContent"),$_smarty_tpl ) ) ));?>
"
								insert-content-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.content"),$_smarty_tpl ) ) ));?>
"
								insert-search-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.insertContentSearch"),$_smarty_tpl ) ) ));?>
"
								load-template-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.emailTemplates"),$_smarty_tpl ) ) ));?>
"
								:locale="step.locale"
								:locales="step.locales"
								more-search-results-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.numberedMore"),$_smarty_tpl ) ) ));?>
"
								:recipient-options="step.recipientOptions"
								:recipients="step.recipients"
								recipients-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['recipientsLabel']->value),$_smarty_tpl ) ) ));?>
"
								remove-item-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.removeItem"),$_smarty_tpl ) ) ));?>
"
								searching-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.searching"),$_smarty_tpl ) ) ));?>
"
								search-results-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"search.searchResults"),$_smarty_tpl ) ) ));?>
"
								:subject="step.subject"
								subject-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['subjectLabel']->value),$_smarty_tpl ) ) ));?>
"
								switch-to-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"semicolon",'label'=>$_smarty_tpl->tpl_vars['switchTolabel']->value),$_smarty_tpl ) ) ));?>
"
								switch-to-named-language-label="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.switchToNamedItem"),$_smarty_tpl ) ) ));?>
"
								:variables="step.variables"
								@set="updateStep"
							></composer>
						</panel-section>
					</template>
					<template v-else-if="step.type === 'promoteFiles'">
						<panel-section>
							<list-panel
								v-for="(list, i) in step.lists"
								:key="i"
								:items="list.files"
								:title="list.name"
							>
								<template v-slot:item="{item}">
									<select-submission-file-list-item
										:created-at="item.createdAt"
										:document-type="item.documentType"
										download-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.download"),$_smarty_tpl ) );?>
"
										:genre-name="localize(item.genreName)"
										:genre-is-primary="!item.genreIsDependent && !item.genreIsSupplementary"
										:file-id="item.id"
										:name="localize(item.name)"
										:uploaded-by="item.uploaderUserName"
										:url="item.url"
									>
										<input
											type="checkbox"
											:name="'promoteFile' + item.id"
											:value="item.id"
											v-model="step.selected"
										></input>
									</select-submission-file-list-item>
								</template>
							</list-panel>
						</panel-section>
					</template>
				</panel>
			</step>
		</steps>

		<panel class="decision__footer__panel">
			<panel-section>
				<span slot="header">
					<!-- empty on purpose -->
				</span>
				<div class="decision__footer" :class="{'decision__footer--noSteps': !steps.length}">
					<button
						v-if="currentStep.type === 'email' && currentStep.canSkip && !skippedSteps.includes(currentStep.id)"
						class="decision__skipStep -linkButton"
						:disabled="isSubmitting"
						@click="toggleSkippedStep(currentStep.id)"
					>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.decision.skipEmail"),$_smarty_tpl ) ) ));?>

					</button>
					<spinner v-if="isSubmitting"></spinner>
					<pkp-button
						:disabled="isSubmitting"
						:is-warnable="true"
						@click="cancel"
					>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.cancel"),$_smarty_tpl ) ) ));?>

					</pkp-button>
					<pkp-button
						v-if="!isOnFirstStep && steps.length > 1"
						:disabled="isSubmitting"
						@click="previousStep"
					>
						<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"help.previous"),$_smarty_tpl ) ) ));?>

					</pkp-button>
					<pkp-button
						:disabled="isSubmitting"
						:is-primary="isOnLastStep"
						@click="nextStep"
					>
						<template v-if="isOnLastStep">
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"editor.decision.recordDecision"),$_smarty_tpl ) ) ));?>

						</template>
						<template v-else>
							<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.continue"),$_smarty_tpl ) ) ));?>

						</template>
					</pkp-button>
				</div>
			</panel-section>
		</panel>
	</div>

<?php
}
}
/* {/block "page"} */
}
