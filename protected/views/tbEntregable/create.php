<?php
/* @var $this TbEntregableController */
/* @var $model TbEntregable */

$this->breadcrumbs=array(
	'Tb Entregables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbEntregable', 'url'=>array('index')),
	array('label'=>'Manage TbEntregable', 'url'=>array('admin')),
);
?>

<h1>Create TbEntregable</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>