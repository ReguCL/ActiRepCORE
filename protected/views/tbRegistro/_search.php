<?php
/* @var $this TbRegistroController */
/* @var $model TbRegistro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_REGISTRO'); ?>
		<?php echo $form->textField($model,'ID_REGISTRO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FECHA'); ?>
		<?php echo $form->textField($model,'FECHA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HORAS'); ?>
		<?php echo $form->textField($model,'HORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_TAREA_ID_TAREA'); ?>
		<?php echo $form->textField($model,'TB_TAREA_ID_TAREA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_ENTREGABLE_ID_ENTREGABLE'); ?>
		<?php echo $form->textField($model,'TB_ENTREGABLE_ID_ENTREGABLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_USUARIO_ID_USUARIO'); ?>
		<?php echo $form->textField($model,'TB_USUARIO_ID_USUARIO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->