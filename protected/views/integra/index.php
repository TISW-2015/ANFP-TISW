<?php
/* @var $this IntegraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Integras',
);

$this->menu=array(
	array('label'=>'Create Integra', 'url'=>array('create')),
	array('label'=>'Manage Integra', 'url'=>array('admin')),
);
?>

<h1>Integras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
