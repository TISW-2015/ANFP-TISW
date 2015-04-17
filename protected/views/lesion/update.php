<?php
/* @var $this LesionController */
/* @var $model Lesion */

$modelo= new futbolista;
$model->LES_correl=$_GET['id'];
$model=Lesion::model()->findByPk($model->LES_correl);
$modelo=futbolista::model()->findByPk($model->LES_futCorrel);

$this->breadcrumbs=array(
	'Futbolista'=>array('//futbolista/admin'),
	$modelo->FUT_nombre." ".$modelo->FUT_apellidoPat=>array('//futbolista/view','id'=>$modelo->FUT_correl),
	'Lesiones'=>array('admin','id'=>$modelo->FUT_correl),
	$model->LES_fecha=>array('view','id'=>$model->LES_correl),
	'Actualizar',
);


$this->menu=array(
	//array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	//array('label'=>'Agregar Lesión', 'url'=>array('create')),
	//array('label'=>'Detalle Lesión', 'url'=>array('view', 'id'=>$model->LES_correl)),
	 array('label'=>'Cancelar', 'url'=>array('admin','id'=>$modelo->FUT_correl)),
);
?>

<h3>Actualizar Lesión</h3>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>