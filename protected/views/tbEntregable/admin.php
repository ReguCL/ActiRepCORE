<?php
/* @var $this TbEntregableController */
/* @var $model TbEntregable */

$this->breadcrumbs=array(
	'Tb Entregables'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbEntregable', 'url'=>array('index')),
	array('label'=>'Create TbEntregable', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-entregable-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tb Entregables</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tb-entregable-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_ENTREGABLE',
		'REFERENCIA',
		'DESCRIPCION',
		'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE',
		'ETAPA_ID_ETAPA',
		'TB_PRODUCTO_ID_PRODUCTO',
		/*
		'TB_PROYECTO_ID_PROYECTO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
