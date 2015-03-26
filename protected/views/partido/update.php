<?php
/* @var $this PartidoController */
/* @var $model Partido */

$this->breadcrumbs=array(
	'Partidos'=>array('index'),
	$model->PAR_correl=>array('view','id'=>$model->PAR_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Partido', 'url'=>array('index')),
	array('label'=>'Create Partido', 'url'=>array('create')),
	array('label'=>'View Partido', 'url'=>array('view', 'id'=>$model->PAR_correl)),
	array('label'=>'Manage Partido', 'url'=>array('admin')),
);
?>

<h1>Update Partido <?php echo $model->PAR_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>