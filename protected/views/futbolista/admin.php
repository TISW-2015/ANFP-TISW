<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */

$this->breadcrumbs=array(
	'Futbolistas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'Lista de Futbolistas', 'url'=>array('index')),
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

<h3>Administrar Futbolistas</h3>

<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'futbolista-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
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
                'template' => '{falta} {lesion} {update} {delete} ',
            	'buttons'=>array(
                    'falta' => array(
                        'label'=>'Agregar Falta', 'url'=>"CHtml::normalizeUrl(array('falta/create', 'id'=>\$data->FUT_correl))",
                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/tarjetas.ico', 
                        'options' => array('class'=>'falta'),
                		),
        			
            		'lesion' => array(
                        'label'=>'Agregar Lesión', 'url'=>"CHtml::normalizeUrl(array('lesion/create', 'id'=>\$data->FUT_correl))",
                        'imageUrl'=>Yii::app()->request->baseUrl.'/images/lesion.ico', 
                        'options' => array('class'=>'lesion'),
                		),
        			),
    			),
		),
	)
); ?>
