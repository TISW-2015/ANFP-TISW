<?php
/* @var $this SanciontecnicoController */
/* @var $model Sanciontecnico */

$this->breadcrumbs=array(
	'Sanciontecnicos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sanciontecnico', 'url'=>array('index')),
	array('label'=>'Create Sanciontecnico', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sanciontecnico-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sanciontecnicos</h1>

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
	'id'=>'sanciontecnico-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SAN_TEC_correl',
		'SAN_TEC_arbCorrel',
		'SAN_TEC_tecCorrel',
		'SAN_TEC_fecha',
		'SAN_TEC_castigo',
		'SAN_TEC_partidoPerido',
		/*
		'SAN_TEC_descripcion',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
