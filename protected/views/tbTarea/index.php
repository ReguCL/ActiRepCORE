<?php
/* @var $this TbTareaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Tareas',
);

$this->menu=array(
	array('label'=>'Create TbTarea', 'url'=>array('create')),
	array('label'=>'Manage TbTarea', 'url'=>array('admin')),
);
?>

<h1>Tb Tareas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
