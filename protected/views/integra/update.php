<?php
/* @var $this IntegraController */
/* @var $model Integra */

$this->breadcrumbs=array(
	'Torneos'=>array('//torneo/admin','id'=>$model->INT_torCorrel),
	Torneo::model()->findByPk($model->INT_torCorrel)->TOR_nombre." ".Torneo::model()->findByPk($model->INT_torCorrel)->TOR_agno=>array('//torneo/view','id'=>$model->INT_torCorrel),
	'Tabla equipos'=>array('admin','id'=>$model->INT_torCorrel),
	Equipo::model()->findByPk($model->INT_equCorrel)->EQU_nombre=>array('view','id'=>$model->INT_correl),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Ver Tabla', 'url'=>array('admin','id'=>$model->INT_torCorrel)),
	array('label'=>'Cancelar', 'url'=>array('view', 'id'=>$model->INT_correl)),
);
?>
<?php echo BsHtml::pageHeader('Actualizar','Tabla Equipos'." ".Equipo::model()->findByPk($model->INT_equCorrel)->EQU_nombre) ?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>