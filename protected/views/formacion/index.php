<?php
/* @var $this FormacionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Formacions',
);

$this->menu=array(
	array('label'=>'Create Formacion', 'url'=>array('create')),
	array('label'=>'Manage Formacion', 'url'=>array('admin')),
);
?>

<h1>Formacions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
