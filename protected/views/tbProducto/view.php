<?php
/* @var $this TbProductoController */
/* @var $model TbProducto */

$this->breadcrumbs=array(
	'Tb Productos'=>array('index'),
	$model->ID_PRODUCTO,
);

$this->menu=array(
	array('label'=>'List TbProducto', 'url'=>array('index')),
	array('label'=>'Create TbProducto', 'url'=>array('create')),
	array('label'=>'Update TbProducto', 'url'=>array('update', 'id'=>$model->ID_PRODUCTO)),
	array('label'=>'Delete TbProducto', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_PRODUCTO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbProducto', 'url'=>array('admin')),
);
?>

<h1>View TbProducto #<?php echo $model->ID_PRODUCTO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_PRODUCTO',
		'REFERENCIA',
		'DESCRIPCION',
	),
)); ?>
