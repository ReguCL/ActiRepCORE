<?php
/* @var $this TbPlanificacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Planificacions',
);

$this->menu=array(
	array('label'=>'Create TbPlanificacion', 'url'=>array('create')),
	array('label'=>'Manage TbPlanificacion', 'url'=>array('admin')),
);
?>

<h1>Tb Planificacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
