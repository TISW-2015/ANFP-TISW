<?php
/* @var $this IncidenteController */
/* @var $model Incidente */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'INC_correl'); ?>
		<?php echo $form->textField($model,'INC_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INC_parCorrel'); ?>
		<?php echo $form->textField($model,'INC_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INC_arbCorrel'); ?>
		<?php echo $form->textField($model,'INC_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INC_descripcion'); ?>
		<?php echo $form->textArea($model,'INC_descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INC_minuto'); ?>
		<?php echo $form->textField($model,'INC_minuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'INC_fecha'); ?>
		<?php echo $form->textField($model,'INC_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->