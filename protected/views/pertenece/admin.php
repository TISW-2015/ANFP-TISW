<?php
/* @var $this PerteneceController */
/* @var $model Pertenece */

$this->breadcrumbs=array(
	'Equipos'=>array('admin'),
	Equipo::model()->findByPk($_GET)->EQU_nombre,
);

$this->menu=array(
	array('label'=>'List Pertenece', 'url'=>array('index')),
	array('label'=>'Create Pertenece', 'url'=>array('create')),
);
?>

<?php echo BsHtml::pageHeader('Historial','Equipos') ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'pertenece-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'PER_correl',
		//'PER_equCorrel',
		array('name'=>'PER_divCorrel','value'=>'Division::model()->findByPk($data->PER_divCorrel)->DIV_nombre'),
		'PER_fecha',
		//array(
			//'class'=>'CButtonColumn',
		//),
	),
)); ?>
