<?php
/* @var $this SancionfutbolistaController */
/* @var $model Sancionfutbolista */

$this->breadcrumbs=array(
	'Sancionfutbolistas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sancionfutbolista', 'url'=>array('index')),
	array('label'=>'Create Sancionfutbolista', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sancionfutbolista-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sancionfutbolistas</h1>

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
	'id'=>'sancionfutbolista-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SAN_FUT_correl',
		'SAN_FUT_futCorrel',
		'SAN_FUT_arbCorrel',
		'SAN_FUT_fecha',
		'SAN_FUT_descripcion',
		'SAN_FUT_castigo',
		/*
		'SAN_FUT_partidoPerdido',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
