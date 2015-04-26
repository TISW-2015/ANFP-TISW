<?php
/* @var $this LesionController */
/* @var $model Lesion */

$modelo= new futbolista;
$modelo->FUT_correl=$_GET['id'];
$modelo=futbolista::model()->findByPk($modelo->FUT_correl);

$this->breadcrumbs=array(
	'Futbolista'=>array('//futbolista/admin'),
	$modelo->FUT_nombre." ".$modelo->FUT_apellidoPat=>array('//futbolista/view','id'=>$modelo->FUT_correl),
	'Lesiones'=>array('admin','id'=>$modelo->FUT_correl),
	'Agregar',
);


$this->menu=array(
	 array('label'=>'Cancelar', 'url'=>array('admin','id'=>$modelo->FUT_correl))
	//array('label'=>'Buscar Lesión', 'url'=>array('admin')),
);
?>

<h1>Agregar Lesión</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>