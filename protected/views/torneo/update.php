<?php
/* @var $this TorneoController */
/* @var $model Torneo */

$this->breadcrumbs=array(
	'Torneos'=>array('admin'),
	$model->TOR_nombre." ".$model->TOR_agno=>array('view','id'=>$model->TOR_correl),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Administrar Torneos', 'url'=>array('admin')),
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->TOR_correl)),
);
?>
<?php echo BsHtml::pageHeader('Actualizar','Torneo'." ".$model->TOR_nombre) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>