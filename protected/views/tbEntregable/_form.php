<?php
/* @var $this TbEntregableController */
/* @var $model TbEntregable */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tb-entregable-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ID_ENTREGABLE'); ?>
		<?php echo $form->textField($model,'ID_ENTREGABLE'); ?>
		<?php echo $form->error($model,'ID_ENTREGABLE'); ?>
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
		<?php echo $form->labelEx($model,'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE'); ?>
		<?php echo $form->textField($model,'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE'); ?>
		<?php echo $form->error($model,'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ETAPA_ID_ETAPA'); ?>
		<?php echo $form->textField($model,'ETAPA_ID_ETAPA'); ?>
		<?php echo $form->error($model,'ETAPA_ID_ETAPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TB_PRODUCTO_ID_PRODUCTO'); ?>
		<?php echo $form->textField($model,'TB_PRODUCTO_ID_PRODUCTO'); ?>
		<?php echo $form->error($model,'TB_PRODUCTO_ID_PRODUCTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TB_PROYECTO_ID_PROYECTO'); ?>
		<?php echo $form->textField($model,'TB_PROYECTO_ID_PROYECTO'); ?>
		<?php echo $form->error($model,'TB_PROYECTO_ID_PROYECTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->