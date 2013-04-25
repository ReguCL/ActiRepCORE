<?php
/* @var $this TbProductoController */
/* @var $model TbProducto */

$this->breadcrumbs=array(
	'Tb Productos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbProducto', 'url'=>array('index')),
	array('label'=>'Manage TbProducto', 'url'=>array('admin')),
);
?>

<h1>Create TbProducto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>