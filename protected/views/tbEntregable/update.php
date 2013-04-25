<?php
/* @var $this TbEntregableController */
/* @var $model TbEntregable */

$this->breadcrumbs=array(
	'Tb Entregables'=>array('index'),
	$model->ID_ENTREGABLE=>array('view','id'=>$model->ID_ENTREGABLE),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbEntregable', 'url'=>array('index')),
	array('label'=>'Create TbEntregable', 'url'=>array('create')),
	array('label'=>'View TbEntregable', 'url'=>array('view', 'id'=>$model->ID_ENTREGABLE)),
	array('label'=>'Manage TbEntregable', 'url'=>array('admin')),
);
?>

<h1>Update TbEntregable <?php echo $model->ID_ENTREGABLE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>