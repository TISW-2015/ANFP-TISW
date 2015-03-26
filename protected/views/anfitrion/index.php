<?php
/* @var $this AnfitrionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Anfitrions',
);

$this->menu=array(
	array('label'=>'Create Anfitrion', 'url'=>array('create')),
	array('label'=>'Manage Anfitrion', 'url'=>array('admin')),
);
?>

<h1>Anfitrions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
