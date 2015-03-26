<?php
/* @var $this ArbitraController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arbitras',
);

$this->menu=array(
	array('label'=>'Create Arbitra', 'url'=>array('create')),
	array('label'=>'Manage Arbitra', 'url'=>array('admin')),
);
?>

<h1>Arbitras</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
