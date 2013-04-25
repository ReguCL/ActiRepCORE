<?php
/* @var $this TbUsuarioController */
/* @var $model TbUsuario */

$this->breadcrumbs=array(
	'Tb Usuarios'=>array('index'),
	$model->ID_USUARIO=>array('view','id'=>$model->ID_USUARIO),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbUsuario', 'url'=>array('index')),
	array('label'=>'Create TbUsuario', 'url'=>array('create')),
	array('label'=>'View TbUsuario', 'url'=>array('view', 'id'=>$model->ID_USUARIO)),
	array('label'=>'Manage TbUsuario', 'url'=>array('admin')),
);
?>

<h1>Update TbUsuario <?php echo $model->ID_USUARIO; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>