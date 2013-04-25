<?php
/* @var $this TbUsuarioController */
/* @var $model TbUsuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-usuario-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_USUARIO'); ?>
		<?php echo $form->textField($model,'ID_USUARIO'); ?>
		<?php echo $form->error($model,'ID_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'REFERENCIA'); ?>
		<?php echo $form->textField($model,'REFERENCIA',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'REFERENCIA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COSTO'); ?>
		<?php echo $form->textField($model,'COSTO'); ?>
		<?php echo $form->error($model,'COSTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ASIGNACION'); ?>
		<?php echo $form->textField($model,'ASIGNACION',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ASIGNACION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CONTRASENA'); ?>
		<?php echo $form->textField($model,'CONTRASENA',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CONTRASENA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIVELACCESO'); ?>
		<?php echo $form->textField($model,'NIVELACCESO',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NIVELACCESO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ESTADO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NICK'); ?>
		<?php echo $form->textField($model,'NICK',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'NICK'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TB_ROLES_ID_ROLES'); ?>
		<?php echo $form->textField($model,'TB_ROLES_ID_ROLES'); ?>
		<?php echo $form->error($model,'TB_ROLES_ID_ROLES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TB_UNIDAD_ID_UNIDAD'); ?>
		<?php echo $form->textField($model,'TB_UNIDAD_ID_UNIDAD'); ?>
		<?php echo $form->error($model,'TB_UNIDAD_ID_UNIDAD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->