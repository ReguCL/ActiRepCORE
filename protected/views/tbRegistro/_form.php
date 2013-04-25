<?php
/* @var $this TbRegistroController */
/* @var $model TbRegistro */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-registro-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_REGISTRO'); ?>
		<?php echo $form->textField($model,'ID_REGISTRO'); ?>
		<?php echo $form->error($model,'ID_REGISTRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
		<?php echo $form->textField($model,'FECHA'); ?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HORAS'); ?>
		<?php echo $form->textField($model,'HORAS'); ?>
		<?php echo $form->error($model,'HORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TB_TAREA_ID_TAREA'); ?>
		<?php echo $form->textField($model,'TB_TAREA_ID_TAREA'); ?>
		<?php echo $form->error($model,'TB_TAREA_ID_TAREA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TB_ENTREGABLE_ID_ENTREGABLE'); ?>
		<?php echo $form->textField($model,'TB_ENTREGABLE_ID_ENTREGABLE'); ?>
		<?php echo $form->error($model,'TB_ENTREGABLE_ID_ENTREGABLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TB_USUARIO_ID_USUARIO'); ?>
		<?php echo $form->textField($model,'TB_USUARIO_ID_USUARIO'); ?>
		<?php echo $form->error($model,'TB_USUARIO_ID_USUARIO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->