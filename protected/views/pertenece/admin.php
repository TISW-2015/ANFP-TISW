<?php
/* @var $this PerteneceController */
/* @var $model Pertenece */

$this->breadcrumbs=array(
	'Equipos'=>array('//Equipo/admin'),
	Equipo::model()->findByPk($_GET)->EQU_nombre=>array('//Equipo/view','id'=>Equipo::model()->findByPk($_GET)->EQU_correl),
	"Historial",
);

$this->menu=array(
	array('label'=>'Volver', 'url'=>array('//Equipo/view','id'=>Equipo::model()->findByPk($_GET)->EQU_correl)),
);
?>

<?php echo BsHtml::pageHeader('Historial','Equipos') ?>

<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'pertenece-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
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
