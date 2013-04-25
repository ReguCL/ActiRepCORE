<?php
/* @var $this TbPlanificacionController */
/* @var $data TbPlanificacion */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ENTREGABLE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ENTREGABLE), array('view', 'id'=>$data->ID_ENTREGABLE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FEC_INICIO')); ?>:</b>
	<?php echo CHtml::encode($data->FEC_INICIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FEC_FIN')); ?>:</b>
	<?php echo CHtml::encode($data->FEC_FIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HORAS')); ?>:</b>
	<?php echo CHtml::encode($data->HORAS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_USUARIO_ID_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->TB_USUARIO_ID_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_TAREA_ID_TAREA')); ?>:</b>
	<?php echo CHtml::encode($data->TB_TAREA_ID_TAREA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_ENTREGABLE_ID_ENTREGABLE')); ?>:</b>
	<?php echo CHtml::encode($data->TB_ENTREGABLE_ID_ENTREGABLE); ?>
	<br />


</div>