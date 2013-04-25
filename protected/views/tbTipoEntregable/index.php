<?php
/* @var $this TbTipoEntregableController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Tipo Entregables',
);

$this->menu=array(
	array('label'=>'Create TbTipoEntregable', 'url'=>array('create')),
	array('label'=>'Manage TbTipoEntregable', 'url'=>array('admin')),
);
?>

<h1>Tb Tipo Entregables</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
