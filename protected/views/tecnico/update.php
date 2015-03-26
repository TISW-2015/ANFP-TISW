<?php
/* @var $this TecnicoController */
/* @var $model Tecnico */

$this->breadcrumbs=array(
	'Tecnicos'=>array('index'),
	$model->TEC_correl=>array('view','id'=>$model->TEC_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tecnico', 'url'=>array('index')),
	array('label'=>'Create Tecnico', 'url'=>array('create')),
	array('label'=>'View Tecnico', 'url'=>array('view', 'id'=>$model->TEC_correl)),
	array('label'=>'Manage Tecnico', 'url'=>array('admin')),
);
?>

<h1>Update Tecnico <?php echo $model->TEC_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>