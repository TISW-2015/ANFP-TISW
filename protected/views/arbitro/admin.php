<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */

$this->breadcrumbs=array(
	'Arbitros'=>array('index'),
	'Administrar',
);

$this->menu=array(
	//array('label'=>'List Arbitro', 'url'=>array('index')),
	array('label'=>'Agregar Árbitro', 'url'=>array('create')),
);
?>

<h3>Administrar Árbitros</h3>

<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'arbitro-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'ARB_correl',
		'ARB_nombre',
		'ARB_apellidoPat',
		'ARB_apellidoMat',
		'ARB_fechaNac',
		'ARB_nacionalidad',
		array(
			'class'=>'CButtonColumn',
			'template' => '{update} {delete}',
		),
	),
)); ?>
