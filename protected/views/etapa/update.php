<?php
/* @var $this EtapaController */
/* @var $model Etapa */

$this->breadcrumbs=array(
	'Etapas'=>array('index'),
	$model->ID_ETAPA=>array('view','id'=>$model->ID_ETAPA),
	'Update',
);

$this->menu=array(
	array('label'=>'List Etapa', 'url'=>array('index')),
	array('label'=>'Create Etapa', 'url'=>array('create')),
	array('label'=>'View Etapa', 'url'=>array('view', 'id'=>$model->ID_ETAPA)),
	array('label'=>'Manage Etapa', 'url'=>array('admin')),
);
?>

<h1>Update Etapa <?php echo $model->ID_ETAPA; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>