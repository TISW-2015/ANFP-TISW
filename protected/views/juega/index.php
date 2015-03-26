<?php
/* @var $this JuegaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Juegas',
);

$this->menu=array(
	array('label'=>'Create Juega', 'url'=>array('create')),
	array('label'=>'Manage Juega', 'url'=>array('admin')),
);
?>

<h1>Juegas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
