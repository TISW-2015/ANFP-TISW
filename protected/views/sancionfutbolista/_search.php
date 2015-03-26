<?php
/* @var $this SancionfutbolistaController */
/* @var $model Sancionfutbolista */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SAN_FUT_correl'); ?>
		<?php echo $form->textField($model,'SAN_FUT_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_FUT_futCorrel'); ?>
		<?php echo $form->textField($model,'SAN_FUT_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_FUT_arbCorrel'); ?>
		<?php echo $form->textField($model,'SAN_FUT_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_FUT_fecha'); ?>
		<?php echo $form->textField($model,'SAN_FUT_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_FUT_descripcion'); ?>
		<?php echo $form->textArea($model,'SAN_FUT_descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_FUT_castigo'); ?>
		<?php echo $form->textField($model,'SAN_FUT_castigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_FUT_partidoPerdido'); ?>
		<?php echo $form->textField($model,'SAN_FUT_partidoPerdido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->