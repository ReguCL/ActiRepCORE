<?php
/* @var $this TbRolesController */
/* @var $model TbRoles */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-roles-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_ROLES'); ?>
		<?php echo $form->textField($model,'ID_ROLES'); ?>
		<?php echo $form->error($model,'ID_ROLES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REFERENCIA'); ?>
		<?php echo $form->textField($model,'REFERENCIA',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'REFERENCIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DESCRIPCION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->