<?php
/* @var $this SanciontecnicoController */
/* @var $model Sanciontecnico */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SAN_TEC_correl'); ?>
		<?php echo $form->textField($model,'SAN_TEC_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_TEC_arbCorrel'); ?>
		<?php echo $form->textField($model,'SAN_TEC_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_TEC_tecCorrel'); ?>
		<?php echo $form->textField($model,'SAN_TEC_tecCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_TEC_fecha'); ?>
		<?php echo $form->textField($model,'SAN_TEC_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_TEC_castigo'); ?>
		<?php echo $form->textField($model,'SAN_TEC_castigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_TEC_partidoPerido'); ?>
		<?php echo $form->textField($model,'SAN_TEC_partidoPerido'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_TEC_descripcion'); ?>
		<?php echo $form->textArea($model,'SAN_TEC_descripcion',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->