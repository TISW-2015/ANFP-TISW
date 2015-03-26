<?php
/* @var $this ContratojugadorController */
/* @var $model Contratojugador */

$this->breadcrumbs=array(
	'Contratojugadors'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Contratojugador', 'url'=>array('index')),
	array('label'=>'Create Contratojugador', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contratojugador-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Contratojugadors</h1>

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
	'id'=>'contratojugador-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CON_JUG_correl',
		'CON_JUG_equCorrel',
		'CON_JUG_agno',
		'CON_JUG_periodo',
		'CON_JUG_futCorrel',
		'CON_JUG_numero',
		/*
		'CON_JUG_amarilla',
		'CON_JUG_roja',
		'CON_JUG_goles',
		'CON_JUG_asistencia',
		'CON_JUG_falta',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
