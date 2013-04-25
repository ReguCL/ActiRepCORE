<?php
/* @var $this TbProductoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Productos',
);

$this->menu=array(
	array('label'=>'Create TbProducto', 'url'=>array('create')),
	array('label'=>'Manage TbProducto', 'url'=>array('admin')),
);
?>

<h1>Tb Productos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
