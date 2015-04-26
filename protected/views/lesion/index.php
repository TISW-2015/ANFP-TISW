<?php
/* @var $this LesionController */
/* @var $dataProvider CActiveDataProvider */
$modelo= new futbolista;
$modelo->FUT_correl=$_GET['id'];
$modelo=futbolista::model()->findByPk($modelo->FUT_correl);

$this->breadcrumbs=array(
	'Futbolista'=>array('//futbolista/admin'),
	$modelo->FUT_nombre." ".$modelo->FUT_apellidoPat=>array('//futbolista/view','id'=>$modelo->FUT_correl),
	'Lesion'=>array('admin','id'=>$modelo->FUT_correl),
	'Agregar',
);

$this->menu=array(
	//array('label'=>'Agregar Lesión', 'url'=>array('create')),
	array('label'=>'Volver', 'url'=>array('futbolista/admin')),
);
?>

<h1>Lesiones</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
