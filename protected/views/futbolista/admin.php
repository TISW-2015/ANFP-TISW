<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Lista de Futbolistas', 'url'=>array('index')),
	array('label'=>'Agregar Futbolista', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#futbolista-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Futbolistas</h1>



<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'futbolista-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'FUT_correl',
		'FUT_nombre',
		'FUT_apellidoPat',
		'FUT_apellidoMat',
		'FUT_fechaNacimiento',
		'FUT_nacionalidad',		
		'FUT_estado',
		'FUT_estadoCivil',
		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
