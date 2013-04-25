<?php
/* @var $this TbProyectoController */
/* @var $model TbProyecto */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-proyecto-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_PROYECTO'); ?>
		<?php echo $form->textField($model,'ID_PROYECTO'); ?>
		<?php echo $form->error($model,'ID_PROYECTO'); ?>
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

	<div class="row">
		<?php echo $form->labelEx($model,'RESPONSABLE'); ?>
		<?php echo $form->textField($model,'RESPONSABLE',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'RESPONSABLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TB_USUARIO_ID_USUARIO'); ?>
		<?php echo $form->textField($model,'TB_USUARIO_ID_USUARIO'); ?>
		<?php echo $form->error($model,'TB_USUARIO_ID_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->