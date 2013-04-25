<?php
/* @var $this TbUsuarioController */
/* @var $model TbUsuario */

$this->breadcrumbs=array(
	'Tb Usuarios'=>array('index'),
	$model->ID_USUARIO,
);

$this->menu=array(
	array('label'=>'List TbUsuario', 'url'=>array('index')),
	array('label'=>'Create TbUsuario', 'url'=>array('create')),
	array('label'=>'Update TbUsuario', 'url'=>array('update', 'id'=>$model->ID_USUARIO)),
	array('label'=>'Delete TbUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_USUARIO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbUsuario', 'url'=>array('admin')),
);
?>

<h1>View TbUsuario #<?php echo $model->ID_USUARIO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_USUARIO',
		'REFERENCIA',
		'COSTO',
		'ASIGNACION',
		'CONTRASENA',
		'NIVELACCESO',
		'ESTADO',
		'NICK',
		'TB_ROLES_ID_ROLES',
		'TB_UNIDAD_ID_UNIDAD',
	),
)); ?>
