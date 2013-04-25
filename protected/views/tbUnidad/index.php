<?php
/* @var $this TbUnidadController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Unidads',
);

$this->menu=array(
	array('label'=>'Create TbUnidad', 'url'=>array('create')),
	array('label'=>'Manage TbUnidad', 'url'=>array('admin')),
);
?>

<h1>Tb Unidads</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
