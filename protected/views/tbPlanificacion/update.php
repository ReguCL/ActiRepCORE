<?php
/* @var $this TbPlanificacionController */
/* @var $model TbPlanificacion */

$this->breadcrumbs=array(
	'Tb Planificacions'=>array('index'),
	$model->ID_ENTREGABLE=>array('view','id'=>$model->ID_ENTREGABLE),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbPlanificacion', 'url'=>array('index')),
	array('label'=>'Create TbPlanificacion', 'url'=>array('create')),
	array('label'=>'View TbPlanificacion', 'url'=>array('view', 'id'=>$model->ID_ENTREGABLE)),
	array('label'=>'Manage TbPlanificacion', 'url'=>array('admin')),
);
?>

<h1>Update TbPlanificacion <?php echo $model->ID_ENTREGABLE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>