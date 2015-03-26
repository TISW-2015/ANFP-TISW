<?php
/* @var $this SancionequipoController */
/* @var $model Sancionequipo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SAN_EQU_correl'); ?>
		<?php echo $form->textField($model,'SAN_EQU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EQU_equCorrel'); ?>
		<?php echo $form->textField($model,'SAN_EQU_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EQU_arbCorrel'); ?>
		<?php echo $form->textField($model,'SAN_EQU_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EQU_motivo'); ?>
		<?php echo $form->textArea($model,'SAN_EQU_motivo',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EQU_descripcion'); ?>
		<?php echo $form->textArea($model,'SAN_EQU_descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EQU_castigoMonto'); ?>
		<?php echo $form->textField($model,'SAN_EQU_castigoMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EQU_fecha'); ?>
		<?php echo $form->textField($model,'SAN_EQU_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->