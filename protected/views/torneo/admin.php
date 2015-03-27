<?php
/* @var $this TorneoController */
/* @var $model Torneo */

$this->breadcrumbs=array(
	'Torneos'
);

$this->menu=array(
	array('label'=>'Registrar Torneo', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Administrar','Torneos') ?>

<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'torneo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'TOR_correl',
		'TOR_nombre',
		//'TOR_division',
		array('name'=>'TOR_division',
			'value'=>'Division::model()->findByPk($data->TOR_division)->DIV_nombre'),
		'TOR_agno',
		'TOR_periodo',
		'TOR_premio',
		'TOR_ganador',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
