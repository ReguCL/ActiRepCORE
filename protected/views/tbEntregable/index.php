<?php
/* @var $this TbEntregableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Entregables',
);

$this->menu=array(
	array('label'=>'Create TbEntregable', 'url'=>array('create')),
	array('label'=>'Manage TbEntregable', 'url'=>array('admin')),
);
?>

<h1>Tb Entregables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
