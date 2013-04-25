<?php
/* @var $this TbProyectoController */
/* @var $model TbProyecto */

$this->breadcrumbs=array(
	'Tb Proyectos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbProyecto', 'url'=>array('index')),
	array('label'=>'Manage TbProyecto', 'url'=>array('admin')),
);
?>

<h1>Create TbProyecto</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>