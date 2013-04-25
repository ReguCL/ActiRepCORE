<?php
/* @var $this TbTipoEntregableController */
/* @var $model TbTipoEntregable */

$this->breadcrumbs=array(
	'Tb Tipo Entregables'=>array('index'),
	$model->ID_TIPO_ENTREGABLE,
);

$this->menu=array(
	array('label'=>'List TbTipoEntregable', 'url'=>array('index')),
	array('label'=>'Create TbTipoEntregable', 'url'=>array('create')),
	array('label'=>'Update TbTipoEntregable', 'url'=>array('update', 'id'=>$model->ID_TIPO_ENTREGABLE)),
	array('label'=>'Delete TbTipoEntregable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_TIPO_ENTREGABLE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbTipoEntregable', 'url'=>array('admin')),
);
?>

<h1>View TbTipoEntregable #<?php echo $model->ID_TIPO_ENTREGABLE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_TIPO_ENTREGABLE',
		'REFERENCIA',
		'DESCRIPCION',
	),
)); ?>
