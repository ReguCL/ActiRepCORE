<?php
/* @var $this TbRolesController */
/* @var $model TbRoles */

$this->breadcrumbs=array(
	'Tb Roles'=>array('index'),
	$model->ID_ROLES=>array('view','id'=>$model->ID_ROLES),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbRoles', 'url'=>array('index')),
	array('label'=>'Create TbRoles', 'url'=>array('create')),
	array('label'=>'View TbRoles', 'url'=>array('view', 'id'=>$model->ID_ROLES)),
	array('label'=>'Manage TbRoles', 'url'=>array('admin')),
);
?>

<h1>Update TbRoles <?php echo $model->ID_ROLES; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>