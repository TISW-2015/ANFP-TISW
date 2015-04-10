<?php
/* @var $this LesionController */
/* @var $model Lesion */

$this->breadcrumbs=array(
	'Lesiones'=>array('index'),
	'Buscar',
);

$this->menu=array(
	array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	array('label'=>'Agregar Lesión', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#lesion-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscar Lesión</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'lesion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'LES_correl',
		'LES_futCorrel',
		'LES_glosa',
		'LES_fecha',
		'LES_descripcion',
		'LES_tiempoReposo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
