<?php
/* @var $this TbUsuarioController */
/* @var $model TbUsuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ID_USUARIO'); ?>
		<?php echo $form->textField($model,'ID_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'REFERENCIA'); ?>
		<?php echo $form->textField($model,'REFERENCIA',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COSTO'); ?>
		<?php echo $form->textField($model,'COSTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ASIGNACION'); ?>
		<?php echo $form->textField($model,'ASIGNACION',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CONTRASENA'); ?>
		<?php echo $form->textField($model,'CONTRASENA',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIVELACCESO'); ?>
		<?php echo $form->textField($model,'NIVELACCESO',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESTADO'); ?>
		<?php echo $form->textField($model,'ESTADO',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NICK'); ?>
		<?php echo $form->textField($model,'NICK',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_ROLES_ID_ROLES'); ?>
		<?php echo $form->textField($model,'TB_ROLES_ID_ROLES'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TB_UNIDAD_ID_UNIDAD'); ?>
		<?php echo $form->textField($model,'TB_UNIDAD_ID_UNIDAD'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->