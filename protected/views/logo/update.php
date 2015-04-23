<?php
/* @var $this LogoController */
/* @var $model Logo */

$this->breadcrumbs=array(
	'Logos'=>array('index'),
	$model->LOG_correl=>array('view','id'=>$model->LOG_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Logo', 'url'=>array('index')),
	array('label'=>'Create Logo', 'url'=>array('create')),
	array('label'=>'View Logo', 'url'=>array('view', 'id'=>$model->LOG_correl)),
	array('label'=>'Manage Logo', 'url'=>array('admin')),
);
?>

<h1>Update Logo <?php echo $model->LOG_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>