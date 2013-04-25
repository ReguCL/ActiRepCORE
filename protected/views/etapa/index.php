<?php
/* @var $this EtapaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Etapas',
);

$this->menu=array(
	array('label'=>'Create Etapa', 'url'=>array('create')),
	array('label'=>'Manage Etapa', 'url'=>array('admin')),
);
?>

<h1>Etapas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
