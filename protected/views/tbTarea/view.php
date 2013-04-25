<?php
/* @var $this TbTareaController */
/* @var $model TbTarea */

$this->breadcrumbs=array(
	'Tb Tareas'=>array('index'),
	$model->ID_TAREA,
);

$this->menu=array(
	array('label'=>'List TbTarea', 'url'=>array('index')),
	array('label'=>'Create TbTarea', 'url'=>array('create')),
	array('label'=>'Update TbTarea', 'url'=>array('update', 'id'=>$model->ID_TAREA)),
	array('label'=>'Delete TbTarea', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_TAREA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbTarea', 'url'=>array('admin')),
);
?>

<h1>View TbTarea #<?php echo $model->ID_TAREA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_TAREA',
		'REFERENCIA',
		'DESCRIPCION',
		'TB_PROYECTO_ID_PROYECTO',
		'ESTADO',
	),
)); ?>
