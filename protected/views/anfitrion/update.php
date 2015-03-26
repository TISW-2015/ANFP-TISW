<?php
/* @var $this AnfitrionController */
/* @var $model Anfitrion */

$this->breadcrumbs=array(
	'Anfitrions'=>array('index'),
	$model->ANF_correl=>array('view','id'=>$model->ANF_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Anfitrion', 'url'=>array('index')),
	array('label'=>'Create Anfitrion', 'url'=>array('create')),
	array('label'=>'View Anfitrion', 'url'=>array('view', 'id'=>$model->ANF_correl)),
	array('label'=>'Manage Anfitrion', 'url'=>array('admin')),
);
?>

<h1>Update Anfitrion <?php echo $model->ANF_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>