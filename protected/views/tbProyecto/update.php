<?php
/* @var $this TbProyectoController */
/* @var $model TbProyecto */

$this->breadcrumbs=array(
	'Tb Proyectos'=>array('index'),
	$model->ID_PROYECTO=>array('view','id'=>$model->ID_PROYECTO),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbProyecto', 'url'=>array('index')),
	array('label'=>'Create TbProyecto', 'url'=>array('create')),
	array('label'=>'View TbProyecto', 'url'=>array('view', 'id'=>$model->ID_PROYECTO)),
	array('label'=>'Manage TbProyecto', 'url'=>array('admin')),
);
?>

<h1>Update TbProyecto <?php echo $model->ID_PROYECTO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>