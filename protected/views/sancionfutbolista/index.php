<?php
/* @var $this SancionfutbolistaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sancionfutbolistas',
);

$this->menu=array(
	array('label'=>'Create Sancionfutbolista', 'url'=>array('create')),
	array('label'=>'Manage Sancionfutbolista', 'url'=>array('admin')),
);
?>

<h1>Sancionfutbolistas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
