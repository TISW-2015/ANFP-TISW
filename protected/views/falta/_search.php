<?php
/* @var $this FaltaController */
/* @var $model Falta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FAL_correl'); ?>
		<?php echo $form->textField($model,'FAL_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAL_castigo'); ?>
		<?php echo $form->textField($model,'FAL_castigo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAL_minuto'); ?>
		<?php echo $form->textField($model,'FAL_minuto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAL_futCorrel'); ?>
		<?php echo $form->textField($model,'FAL_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAL_parCorrel'); ?>
		<?php echo $form->textField($model,'FAL_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAL_arbCorrel'); ?>
		<?php echo $form->textField($model,'FAL_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->