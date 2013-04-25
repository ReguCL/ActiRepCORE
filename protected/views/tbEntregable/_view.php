<?php
/* @var $this TbEntregableController */
/* @var $data TbEntregable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ENTREGABLE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ENTREGABLE), array('view', 'id'=>$data->ID_ENTREGABLE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE')); ?>:</b>
	<?php echo CHtml::encode($data->TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETAPA_ID_ETAPA')); ?>:</b>
	<?php echo CHtml::encode($data->ETAPA_ID_ETAPA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_PRODUCTO_ID_PRODUCTO')); ?>:</b>
	<?php echo CHtml::encode($data->TB_PRODUCTO_ID_PRODUCTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_PROYECTO_ID_PROYECTO')); ?>:</b>
	<?php echo CHtml::encode($data->TB_PROYECTO_ID_PROYECTO); ?>
	<br />


</div>