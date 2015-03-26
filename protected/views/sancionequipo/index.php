<?php
/* @var $this SancionequipoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sancionequipos',
);

$this->menu=array(
	array('label'=>'Create Sancionequipo', 'url'=>array('create')),
	array('label'=>'Manage Sancionequipo', 'url'=>array('admin')),
);
?>

<h1>Sancionequipos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
