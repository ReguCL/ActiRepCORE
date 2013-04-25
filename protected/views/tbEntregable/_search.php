<?php
/* @var $this TbEntregableController */
/* @var $model TbEntregable */
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
		<?php echo $form->label($model,'REFERENCIA'); ?>
		<?php echo $form->textField($model,'REFERENCIA',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPCION'); ?>
		<?php echo $form->textField($model,'DESCRIPCION',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE'); ?>
		<?php echo $form->textField($model,'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETAPA_ID_ETAPA'); ?>
		<?php echo $form->textField($model,'ETAPA_ID_ETAPA'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_PRODUCTO_ID_PRODUCTO'); ?>
		<?php echo $form->textField($model,'TB_PRODUCTO_ID_PRODUCTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_PROYECTO_ID_PROYECTO'); ?>
		<?php echo $form->textField($model,'TB_PROYECTO_ID_PROYECTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->