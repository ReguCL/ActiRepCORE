<?php
/* @var $this TbPlanificacionController */
/* @var $model TbPlanificacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_ENTREGABLE'); ?>
		<?php echo $form->textField($model,'ID_ENTREGABLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FEC_INICIO'); ?>
		<?php echo $form->textField($model,'FEC_INICIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FEC_FIN'); ?>
		<?php echo $form->textField($model,'FEC_FIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HORAS'); ?>
		<?php echo $form->textField($model,'HORAS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_USUARIO_ID_USUARIO'); ?>
		<?php echo $form->textField($model,'TB_USUARIO_ID_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_TAREA_ID_TAREA'); ?>
		<?php echo $form->textField($model,'TB_TAREA_ID_TAREA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_ENTREGABLE_ID_ENTREGABLE'); ?>
		<?php echo $form->textField($model,'TB_ENTREGABLE_ID_ENTREGABLE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->