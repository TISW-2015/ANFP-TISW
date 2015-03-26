<?php
/* @var $this DivisionController */
/* @var $model Division */

$this->breadcrumbs=array(
	'Divisions'=>array('index'),
	$model->DIV_correl=>array('view','id'=>$model->DIV_correl),
	'Update',
);

$this->menu=array(
	array('label'=>'List Division', 'url'=>array('index')),
	array('label'=>'Create Division', 'url'=>array('create')),
	array('label'=>'View Division', 'url'=>array('view', 'id'=>$model->DIV_correl)),
	array('label'=>'Manage Division', 'url'=>array('admin')),
);
?>

<h1>Update Division <?php echo $model->DIV_correl; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>