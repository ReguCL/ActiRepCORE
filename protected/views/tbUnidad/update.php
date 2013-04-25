<?php
/* @var $this TbUnidadController */
/* @var $model TbUnidad */

$this->breadcrumbs=array(
	'Tb Unidads'=>array('index'),
	$model->ID_UNIDAD=>array('view','id'=>$model->ID_UNIDAD),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbUnidad', 'url'=>array('index')),
	array('label'=>'Create TbUnidad', 'url'=>array('create')),
	array('label'=>'View TbUnidad', 'url'=>array('view', 'id'=>$model->ID_UNIDAD)),
	array('label'=>'Manage TbUnidad', 'url'=>array('admin')),
);
?>

<h1>Update TbUnidad <?php echo $model->ID_UNIDAD; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>