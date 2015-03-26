<?php
/* @var $this LesionController */
/* @var $model Lesion */

$this->breadcrumbs=array(
	'Lesions'=>array('index'),
	$model->LES_correl=>array('view','id'=>$model->LES_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Lesion', 'url'=>array('index')),
	array('label'=>'Create Lesion', 'url'=>array('create')),
	array('label'=>'View Lesion', 'url'=>array('view', 'id'=>$model->LES_correl)),
	array('label'=>'Manage Lesion', 'url'=>array('admin')),
);
?>

<h1>Update Lesion <?php echo $model->LES_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>