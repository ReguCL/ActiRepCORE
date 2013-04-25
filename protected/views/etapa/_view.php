<?php
/* @var $this EtapaController */
/* @var $data Etapa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ETAPA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ETAPA), array('view', 'id'=>$data->ID_ETAPA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />


</div>