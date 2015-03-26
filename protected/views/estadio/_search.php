<?php
/* @var $this EstadioController */
/* @var $model Estadio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'EST_correl'); ?>
		<?php echo $form->textField($model,'EST_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EST_nombre'); ?>
		<?php echo $form->textField($model,'EST_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EST_capacidad'); ?>
		<?php echo $form->textField($model,'EST_capacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EST_estado'); ?>
		<?php echo $form->textField($model,'EST_estado',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->