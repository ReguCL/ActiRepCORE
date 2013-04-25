<?php
/* @var $this TbRolesController */
/* @var $data TbRoles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_ROLES')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_ROLES), array('view', 'id'=>$data->ID_ROLES)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPCION); ?>
	<br />


</div>