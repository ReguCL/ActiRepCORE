<?php
/* @var $this TbPlanificacionController */
/* @var $model TbPlanificacion */

$this->breadcrumbs=array(
	'Tb Planificacions'=>array('index'),
	$model->ID_ENTREGABLE,
);

$this->menu=array(
	array('label'=>'List TbPlanificacion', 'url'=>array('index')),
	array('label'=>'Create TbPlanificacion', 'url'=>array('create')),
	array('label'=>'Update TbPlanificacion', 'url'=>array('update', 'id'=>$model->ID_ENTREGABLE)),
	array('label'=>'Delete TbPlanificacion', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ENTREGABLE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbPlanificacion', 'url'=>array('admin')),
);
?>

<h1>View TbPlanificacion #<?php echo $model->ID_ENTREGABLE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ENTREGABLE',
		'FEC_INICIO',
		'FEC_FIN',
		'HORAS',
		'TB_USUARIO_ID_USUARIO',
		'TB_TAREA_ID_TAREA',
		'TB_ENTREGABLE_ID_ENTREGABLE',
	),
)); ?>
