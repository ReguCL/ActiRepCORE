<?php
/* @var $this TbUsuarioController */
/* @var $model TbUsuario */

$this->breadcrumbs=array(
	'Tb Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TbUsuario', 'url'=>array('index')),
	array('label'=>'Manage TbUsuario', 'url'=>array('admin')),
);
?>

<h1>Create TbUsuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>