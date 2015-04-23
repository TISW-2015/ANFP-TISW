<?php
/* @var $this ParticipaController */
/* @var $model Participa */

$this->breadcrumbs=array(
	'Participas'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Participa', 'url'=>array('index')),
	array('label'=>'Create Participa', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Programacion','Partidos') ?>


<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'participa-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'PART_correl',
		//'PART_equCorrel',
		array('name'=>'PART_equCorrel',
			'value'=>'Equipo::model()->findByPk($data->PART_equCorrel)->EQU_nombre'
			),
		'PART_parCorrel',
		'PART_posicion',
		'PART_goles',
		'PART_faltas',
		'PART_tarjetaAmarilla'
		,
		'PART_tarjetaRoja',
		'PART_tiroLibre',
		'PART_corner',
		'PART_penal',
		'PART_extranjero',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
