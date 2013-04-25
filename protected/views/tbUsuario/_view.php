<?php
/* @var $this TbUsuarioController */
/* @var $data TbUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID_USUARIO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID_USUARIO), array('view', 'id'=>$data->ID_USUARIO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('REFERENCIA')); ?>:</b>
	<?php echo CHtml::encode($data->REFERENCIA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COSTO')); ?>:</b>
	<?php echo CHtml::encode($data->COSTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ASIGNACION')); ?>:</b>
	<?php echo CHtml::encode($data->ASIGNACION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CONTRASENA')); ?>:</b>
	<?php echo CHtml::encode($data->CONTRASENA); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIVELACCESO')); ?>:</b>
	<?php echo CHtml::encode($data->NIVELACCESO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->ESTADO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('NICK')); ?>:</b>
	<?php echo CHtml::encode($data->NICK); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_ROLES_ID_ROLES')); ?>:</b>
	<?php echo CHtml::encode($data->TB_ROLES_ID_ROLES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TB_UNIDAD_ID_UNIDAD')); ?>:</b>
	<?php echo CHtml::encode($data->TB_UNIDAD_ID_UNIDAD); ?>
	<br />

	*/ ?>

</div>