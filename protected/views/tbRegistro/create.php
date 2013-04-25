<?php
/* @var $this TbRegistroController */
/* @var $model TbRegistro */

$this->breadcrumbs=array(
	'Tb Registros'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbRegistro', 'url'=>array('index')),
	array('label'=>'Manage TbRegistro', 'url'=>array('admin')),
);
?>

<h1>Create TbRegistro</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>