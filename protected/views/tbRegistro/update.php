<?php
/* @var $this TbRegistroController */
/* @var $model TbRegistro */

$this->breadcrumbs=array(
	'Tb Registros'=>array('index'),
	$model->ID_REGISTRO=>array('view','id'=>$model->ID_REGISTRO),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbRegistro', 'url'=>array('index')),
	array('label'=>'Create TbRegistro', 'url'=>array('create')),
	array('label'=>'View TbRegistro', 'url'=>array('view', 'id'=>$model->ID_REGISTRO)),
	array('label'=>'Manage TbRegistro', 'url'=>array('admin')),
);
?>

<h1>Update TbRegistro <?php echo $model->ID_REGISTRO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>