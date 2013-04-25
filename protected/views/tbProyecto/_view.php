<?php
/* @var $this TbProyectoController */
/* @var $data TbProyecto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_PROYECTO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_PROYECTO), array('view', 'id'=>$data->ID_PROYECTO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RESPONSABLE')); ?>:</b>
	<?php echo CHtml::encode($data->RESPONSABLE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_USUARIO_ID_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->TB_USUARIO_ID_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />


</div>