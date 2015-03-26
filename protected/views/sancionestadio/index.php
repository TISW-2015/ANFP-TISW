<?php
/* @var $this SancionestadioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sancionestadios',
);

$this->menu=array(
	array('label'=>'Create Sancionestadio', 'url'=>array('create')),
	array('label'=>'Manage Sancionestadio', 'url'=>array('admin')),
);
?>

<h1>Sancionestadios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
