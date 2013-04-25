<?php
/* @var $this TbUnidadController */
/* @var $data TbUnidad */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_UNIDAD')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_UNIDAD), array('view', 'id'=>$data->ID_UNIDAD)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />


</div>