<?php
/* @var $this TbRolesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tb Roles',
);

$this->menu=array(
	array('label'=>'Create TbRoles', 'url'=>array('create')),
	array('label'=>'Manage TbRoles', 'url'=>array('admin')),
);
?>

<h1>Tb Roles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
