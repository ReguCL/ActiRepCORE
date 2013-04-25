<?php
/* @var $this EtapaController */
/* @var $model Etapa */

$this->breadcrumbs=array(
	'Etapas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Etapa', 'url'=>array('index')),
	array('label'=>'Manage Etapa', 'url'=>array('admin')),
);
?>

<h1>Create Etapa</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>