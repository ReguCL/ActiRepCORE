<?php
/* @var $this TbPlanificacionController */
/* @var $model TbPlanificacion */

$this->breadcrumbs=array(
	'Tb Planificacions'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TbPlanificacion', 'url'=>array('index')),
	array('label'=>'Create TbPlanificacion', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tb-planificacion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tb Planificacions</h1>

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
	'id'=>'tb-planificacion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ID_ENTREGABLE',
		'FEC_INICIO',
		'FEC_FIN',
		'HORAS',
		'TB_USUARIO_ID_USUARIO',
		'TB_TAREA_ID_TAREA',
		/*
		'TB_ENTREGABLE_ID_ENTREGABLE',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
