<?php
/* @var $this LesionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Lesions',
);

$this->menu=array(
	array('label'=>'Create Lesion', 'url'=>array('create')),
	array('label'=>'Manage Lesion', 'url'=>array('admin')),
);
?>

<h1>Lesions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
