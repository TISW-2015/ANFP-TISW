<?php
/* @var $this IncidenteController */
/* @var $model Incidente */

$this->breadcrumbs=array(
	'Incidentes'=>array('index'),
	$model->INC_correl=>array('view','id'=>$model->INC_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Incidente', 'url'=>array('index')),
	array('label'=>'Create Incidente', 'url'=>array('create')),
	array('label'=>'View Incidente', 'url'=>array('view', 'id'=>$model->INC_correl)),
	array('label'=>'Manage Incidente', 'url'=>array('admin')),
);
?>

<h1>Update Incidente <?php echo $model->INC_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>