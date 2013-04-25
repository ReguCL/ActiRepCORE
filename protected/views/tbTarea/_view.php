<?php
/* @var $this TbTareaController */
/* @var $data TbTarea */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_TAREA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_TAREA), array('view', 'id'=>$data->ID_TAREA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_PROYECTO_ID_PROYECTO')); ?>:</b>
	<?php echo CHtml::encode($data->TB_PROYECTO_ID_PROYECTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>