<?php
/* @var $this TbUnidadController */
/* @var $model TbUnidad */

$this->breadcrumbs=array(
	'Tb Unidads'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbUnidad', 'url'=>array('index')),
	array('label'=>'Manage TbUnidad', 'url'=>array('admin')),
);
?>

<h1>Create TbUnidad</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>