<?php
/* @var $this TbTipoEntregableController */
/* @var $model TbTipoEntregable */

$this->breadcrumbs=array(
	'Tb Tipo Entregables'=>array('index'),
	$model->ID_TIPO_ENTREGABLE=>array('view','id'=>$model->ID_TIPO_ENTREGABLE),
	'Update',
);

$this->menu=array(
	array('label'=>'List TbTipoEntregable', 'url'=>array('index')),
	array('label'=>'Create TbTipoEntregable', 'url'=>array('create')),
	array('label'=>'View TbTipoEntregable', 'url'=>array('view', 'id'=>$model->ID_TIPO_ENTREGABLE)),
	array('label'=>'Manage TbTipoEntregable', 'url'=>array('admin')),
);
?>

<h1>Update TbTipoEntregable <?php echo $model->ID_TIPO_ENTREGABLE; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>