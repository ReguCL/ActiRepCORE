<?php
/* @var $this TbUnidadController */
/* @var $model TbUnidad */

$this->breadcrumbs=array(
	'Tb Unidads'=>array('index'),
	$model->ID_UNIDAD,
);

$this->menu=array(
	array('label'=>'List TbUnidad', 'url'=>array('index')),
	array('label'=>'Create TbUnidad', 'url'=>array('create')),
	array('label'=>'Update TbUnidad', 'url'=>array('update', 'id'=>$model->ID_UNIDAD)),
	array('label'=>'Delete TbUnidad', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_UNIDAD),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbUnidad', 'url'=>array('admin')),
);
?>

<h1>View TbUnidad #<?php echo $model->ID_UNIDAD; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_UNIDAD',
		'REFERENCIA',
		'DESCRIPCION',
	),
)); ?>
