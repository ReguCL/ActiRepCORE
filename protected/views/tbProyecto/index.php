<?php
/* @var $this TbProyectoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Proyectos',
);

$this->menu=array(
	array('label'=>'Create TbProyecto', 'url'=>array('create')),
	array('label'=>'Manage TbProyecto', 'url'=>array('admin')),
);
?>

<h1>Tb Proyectos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
