<?php
/* @var $this TbUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Usuarios',
);

$this->menu=array(
	array('label'=>'Create TbUsuario', 'url'=>array('create')),
	array('label'=>'Manage TbUsuario', 'url'=>array('admin')),
);
?>

<h1>Tb Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
