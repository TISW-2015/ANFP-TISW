<?php
/* @var $this ArbitraController */
/* @var $model Arbitra */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ARBI_correl'); ?>
		<?php echo $form->textField($model,'ARBI_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARBI_parCorrel'); ?>
		<?php echo $form->textField($model,'ARBI_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARBI_arbCorrel'); ?>
		<?php echo $form->textField($model,'ARBI_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARBI_tipo'); ?>
		<?php echo $form->textField($model,'ARBI_tipo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->