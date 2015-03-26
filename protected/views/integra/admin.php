<?php
/* @var $this IntegraController */
/* @var $model Integra */

$this->breadcrumbs=array(
	'Integras'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Integra', 'url'=>array('index')),
	array('label'=>'Create Integra', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#integra-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Integras</h1>

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
	'id'=>'integra-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'INT_correl',
		'INT_torCorrel',
		'INT_equCorrel',
		'INT_puntaje',
		'INT_golesFavor',
		'INT_golesContra',
		/*
		'INT_golesDif',
		'INT_partidoGanado',
		'INT_partidoPerdido',
		'INT_partidoEmpatado',
		'INT_tarjetaRojas',
		'INT_tarjetaAmarilla',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
