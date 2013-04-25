<?php
/* @var $this TbTareaController */
/* @var $model TbTarea */

$this->breadcrumbs=array(
	'Tb Tareas'=>array('index'),
	$model->ID_TAREA=>array('view','id'=>$model->ID_TAREA),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbTarea', 'url'=>array('index')),
	array('label'=>'Create TbTarea', 'url'=>array('create')),
	array('label'=>'View TbTarea', 'url'=>array('view', 'id'=>$model->ID_TAREA)),
	array('label'=>'Manage TbTarea', 'url'=>array('admin')),
);
?>

<h1>Update TbTarea <?php echo $model->ID_TAREA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>