<?php
/* @var $this TbProductoController */
/* @var $data TbProducto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PRODUCTO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PRODUCTO), array('view', 'id'=>$data->ID_PRODUCTO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />


</div>