<?php
/* @var $this LesionController */
/* @var $model Lesion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'LES_correl'); ?>
		<?php echo $form->textField($model,'LES_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LES_futCorrel'); ?>
		<?php echo $form->textField($model,'LES_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LES_glosa'); ?>
		<?php echo $form->textField($model,'LES_glosa',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LES_fecha'); ?>
		<?php echo $form->textField($model,'LES_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LES_descripcion'); ?>
		<?php echo $form->textArea($model,'LES_descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'LES_tiempoReposo'); ?>
		<?php echo $form->textField($model,'LES_tiempoReposo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->