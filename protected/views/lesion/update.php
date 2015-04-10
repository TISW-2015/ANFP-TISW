<?php
/* @var $this LesionController */
/* @var $model Lesion */

$this->breadcrumbs=array(
	'Lesiones'=>array('index'),
	$model->LES_correl=>array('view','id'=>$model->LES_correl),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Lesiones', 'url'=>array('index')),
	array('label'=>'Agregar Lesión', 'url'=>array('create')),
	array('label'=>'Detalle Lesión', 'url'=>array('view', 'id'=>$model->LES_correl)),
	array('label'=>'Buscar Lesión', 'url'=>array('admin')),
);
?>

<h1>Update Lesion <?php echo $model->LES_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>