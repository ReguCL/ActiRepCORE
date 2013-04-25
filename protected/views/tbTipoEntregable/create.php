<?php
/* @var $this TbTipoEntregableController */
/* @var $model TbTipoEntregable */

$this->breadcrumbs=array(
	'Tb Tipo Entregables'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbTipoEntregable', 'url'=>array('index')),
	array('label'=>'Manage TbTipoEntregable', 'url'=>array('admin')),
);
?>

<h1>Create TbTipoEntregable</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>