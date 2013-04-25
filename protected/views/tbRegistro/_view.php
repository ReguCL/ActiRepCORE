<?php
/* @var $this TbRegistroController */
/* @var $data TbRegistro */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_REGISTRO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_REGISTRO), array('view', 'id'=>$data->ID_REGISTRO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->FECHA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HORAS')); ?>:</b>
	<?php echo CHtml::encode($data->HORAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_TAREA_ID_TAREA')); ?>:</b>
	<?php echo CHtml::encode($data->TB_TAREA_ID_TAREA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_ENTREGABLE_ID_ENTREGABLE')); ?>:</b>
	<?php echo CHtml::encode($data->TB_ENTREGABLE_ID_ENTREGABLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_USUARIO_ID_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->TB_USUARIO_ID_USUARIO); ?>
	<br />


</div>