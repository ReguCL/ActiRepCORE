<?php
/* @var $this TbRegistroController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Registros',
);

$this->menu=array(
	array('label'=>'Create TbRegistro', 'url'=>array('create')),
	array('label'=>'Manage TbRegistro', 'url'=>array('admin')),
);
?>

<h1>Tb Registros</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
