<?php
/* @var $this SancionestadioController */
/* @var $model Sancionestadio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SAN_EST_correl'); ?>
		<?php echo $form->textField($model,'SAN_EST_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EST_estCorrel'); ?>
		<?php echo $form->textField($model,'SAN_EST_estCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EST_arbCorrel'); ?>
		<?php echo $form->textField($model,'SAN_EST_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EST_fecha'); ?>
		<?php echo $form->textField($model,'SAN_EST_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAN_EST_castigo'); ?>
		<?php echo $form->textField($model,'SAN_EST_castigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->