<?php
/* @var $this PartidoController */
/* @var $model Partido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'PAR_correl'); ?>
		<?php echo $form->textField($model,'PAR_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAR_estCorrel'); ?>
		<?php echo $form->textField($model,'PAR_estCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAR_programacion'); ?>
		<?php echo $form->textField($model,'PAR_programacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAR_hora'); ?>
		<?php echo $form->textField($model,'PAR_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAR_fecha'); ?>
		<?php echo $form->textField($model,'PAR_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAR_asistencia'); ?>
		<?php echo $form->textField($model,'PAR_asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAR_recaudo'); ?>
		<?php echo $form->textField($model,'PAR_recaudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAR_estado'); ?>
		<?php echo $form->textField($model,'PAR_estado',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PAR_tiempo'); ?>
		<?php echo $form->textField($model,'PAR_tiempo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->