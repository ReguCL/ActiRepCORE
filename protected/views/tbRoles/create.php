<?php
/* @var $this TbRolesController */
/* @var $model TbRoles */

$this->breadcrumbs=array(
	'Tb Roles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbRoles', 'url'=>array('index')),
	array('label'=>'Manage TbRoles', 'url'=>array('admin')),
);
?>

<h1>Create TbRoles</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>