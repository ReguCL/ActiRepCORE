<?php
/* @var $this EtapaController */
/* @var $model Etapa */

$this->breadcrumbs=array(
	'Etapas'=>array('index'),
	$model->ID_ETAPA,
);

$this->menu=array(
	array('label'=>'List Etapa', 'url'=>array('index')),
	array('label'=>'Create Etapa', 'url'=>array('create')),
	array('label'=>'Update Etapa', 'url'=>array('update', 'id'=>$model->ID_ETAPA)),
	array('label'=>'Delete Etapa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ETAPA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Etapa', 'url'=>array('admin')),
);
?>

<h1>View Etapa #<?php echo $model->ID_ETAPA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ETAPA',
		'REFERENCIA',
		'DESCRIPCION',
	),
)); ?>
