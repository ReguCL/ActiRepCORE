<?php
/* @var $this TbPlanificacionController */
/* @var $model TbPlanificacion */

$this->breadcrumbs=array(
	'Tb Planificacions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbPlanificacion', 'url'=>array('index')),
	array('label'=>'Manage TbPlanificacion', 'url'=>array('admin')),
);
?>

<h1>Create TbPlanificacion</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>