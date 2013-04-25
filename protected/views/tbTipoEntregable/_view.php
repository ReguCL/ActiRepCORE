<?php
/* @var $this TbTipoEntregableController */
/* @var $data TbTipoEntregable */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_TIPO_ENTREGABLE')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_TIPO_ENTREGABLE), array('view', 'id'=>$data->ID_TIPO_ENTREGABLE)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />


</div>