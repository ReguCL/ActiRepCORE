<?php
/* @var $this TbRolesController */
/* @var $model TbRoles */

$this->breadcrumbs=array(
	'Tb Roles'=>array('index'),
	$model->ID_ROLES,
);

$this->menu=array(
	array('label'=>'List TbRoles', 'url'=>array('index')),
	array('label'=>'Create TbRoles', 'url'=>array('create')),
	array('label'=>'Update TbRoles', 'url'=>array('update', 'id'=>$model->ID_ROLES)),
	array('label'=>'Delete TbRoles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ROLES),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbRoles', 'url'=>array('admin')),
);
?>

<h1>View TbRoles #<?php echo $model->ID_ROLES; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ROLES',
		'REFERENCIA',
		'DESCRIPCION',
	),
)); ?>
