<?php
/* @var $this TbProductoController */
/* @var $model TbProducto */

$this->breadcrumbs=array(
	'Tb Productos'=>array('index'),
	$model->ID_PRODUCTO=>array('view','id'=>$model->ID_PRODUCTO),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbProducto', 'url'=>array('index')),
	array('label'=>'Create TbProducto', 'url'=>array('create')),
	array('label'=>'View TbProducto', 'url'=>array('view', 'id'=>$model->ID_PRODUCTO)),
	array('label'=>'Manage TbProducto', 'url'=>array('admin')),
);
?>

<h1>Update TbProducto <?php echo $model->ID_PRODUCTO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>