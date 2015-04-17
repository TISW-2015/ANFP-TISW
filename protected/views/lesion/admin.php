<?php
/* @var $this LesionController */
/* @var $model Lesion */

$modelo= new futbolista;
$modelo->FUT_correl=$_GET['id'];
$modelo=futbolista::model()->findByPk($modelo->FUT_correl);

$this->breadcrumbs=array(
	'Futbolista'=>array('//futbolista/admin'),
	$modelo->FUT_nombre." ".$modelo->FUT_apellidoPat=>array('//futbolista/view','id'=>$modelo->FUT_correl),
	'Lesiones',
);


$this->menu=array(
	//array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	
	array('label'=>'Agregar Lesión', 'url'=>array('create','id'=>$modelo->FUT_correl)),
	array('label'=>'Volver', 'url'=>array('//futbolista/view','id'=>$modelo->FUT_correl)),
);


?>

<h3>Administrar Lesiones</h3>


<?php $this->widget('bootstrap.widgets.BsGridView', array(
	'id'=>'lesion-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'type'=>BsHtml::GRID_TYPE_BORDERED,
	'columns'=>array(
		//'LES_correl',
		//'LES_futCorrel',
		//array('name'=>'LES_futCorrel',
			//'value'=>'Lesion::model()->findByAttributes($data->LES_futCorrel)->FUT_nombre'),
		'LES_glosa',
		'LES_fecha',
		'LES_descripcion',
		'LES_tiempoReposo',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
