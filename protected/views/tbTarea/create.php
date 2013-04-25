<?php
/* @var $this TbTareaController */
/* @var $model TbTarea */

$this->breadcrumbs=array(
	'Tb Tareas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbTarea', 'url'=>array('index')),
	array('label'=>'Manage TbTarea', 'url'=>array('admin')),
);
?>

<h1>Create TbTarea</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>