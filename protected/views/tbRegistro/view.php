<?php
/* @var $this TbRegistroController */
/* @var $model TbRegistro */

$this->breadcrumbs=array(
	'Tb Registros'=>array('index'),
	$model->ID_REGISTRO,
);

$this->menu=array(
	array('label'=>'List TbRegistro', 'url'=>array('index')),
	array('label'=>'Create TbRegistro', 'url'=>array('create')),
	array('label'=>'Update TbRegistro', 'url'=>array('update', 'id'=>$model->ID_REGISTRO)),
	array('label'=>'Delete TbRegistro', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_REGISTRO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbRegistro', 'url'=>array('admin')),
);
?>

<h1>View TbRegistro #<?php echo $model->ID_REGISTRO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_REGISTRO',
		'FECHA',
		'HORAS',
		'TB_TAREA_ID_TAREA',
		'TB_ENTREGABLE_ID_ENTREGABLE',
		'TB_USUARIO_ID_USUARIO',
	),
)); ?>
