<?php
/* @var $this FutbolistaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Futbolistas',
);

$this->menu=array(
	array('label'=>'Create Futbolista', 'url'=>array('create')),
	array('label'=>'Manage Futbolista', 'url'=>array('admin')),
);
?>

<h1>Futbolistas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
