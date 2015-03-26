<?php
/* @var $this SancionequipoController */
/* @var $model Sancionequipo */

$this->breadcrumbs=array(
	'Sancionequipos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Sancionequipo', 'url'=>array('index')),
	array('label'=>'Create Sancionequipo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#sancionequipo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Sancionequipos</h1>

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
	'id'=>'sancionequipo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'SAN_EQU_correl',
		'SAN_EQU_equCorrel',
		'SAN_EQU_arbCorrel',
		'SAN_EQU_motivo',
		'SAN_EQU_descripcion',
		'SAN_EQU_castigoMonto',
		/*
		'SAN_EQU_fecha',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
