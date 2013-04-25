<?php
/* @var $this TbEntregableController */
/* @var $model TbEntregable */

$this->breadcrumbs=array(
	'Tb Entregables'=>array('index'),
	$model->ID_ENTREGABLE,
);

$this->menu=array(
	array('label'=>'List TbEntregable', 'url'=>array('index')),
	array('label'=>'Create TbEntregable', 'url'=>array('create')),
	array('label'=>'Update TbEntregable', 'url'=>array('update', 'id'=>$model->ID_ENTREGABLE)),
	array('label'=>'Delete TbEntregable', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID_ENTREGABLE),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TbEntregable', 'url'=>array('admin')),
);
?>

<h1>View TbEntregable #<?php echo $model->ID_ENTREGABLE; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ID_ENTREGABLE',
		'REFERENCIA',
		'DESCRIPCION',
		'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE',
		'ETAPA_ID_ETAPA',
		'TB_PRODUCTO_ID_PRODUCTO',
		'TB_PROYECTO_ID_PROYECTO',
	),
)); ?>
