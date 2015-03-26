<?php
/* @var $this TorneoController */
/* @var $model Torneo */

$this->breadcrumbs=array(
	'Torneos'=>array('index'),
	$model->TOR_correl=>array('view','id'=>$model->TOR_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Torneo', 'url'=>array('index')),
	array('label'=>'Create Torneo', 'url'=>array('create')),
	array('label'=>'View Torneo', 'url'=>array('view', 'id'=>$model->TOR_correl)),
	array('label'=>'Manage Torneo', 'url'=>array('admin')),
);
?>

<h1>Update Torneo <?php echo $model->TOR_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>