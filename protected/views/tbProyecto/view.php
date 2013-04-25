<?php
/* @var $this TbProyectoController */
/* @var $model TbProyecto */

$this->breadcrumbs=array(
	'Tb Proyectos'=>array('index'),
	$model->ID_PROYECTO,
);

$this->menu=array(
	array('label'=>'List TbProyecto', 'url'=>array('index')),
	array('label'=>'Create TbProyecto', 'url'=>array('create')),
	array('label'=>'Update TbProyecto', 'url'=>array('update', 'id'=>$model->ID_PROYECTO)),
	array('label'=>'Delete TbProyecto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PROYECTO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbProyecto', 'url'=>array('admin')),
);
?>

<h1>View TbProyecto #<?php echo $model->ID_PROYECTO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PROYECTO',
		'REFERENCIA',
		'DESCRIPCION',
		'RESPONSABLE',
		'TB_USUARIO_ID_USUARIO',
		'ESTADO',
	),
)); ?>
