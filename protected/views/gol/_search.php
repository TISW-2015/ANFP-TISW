<?php
/* @var $this GolController */
/* @var $model Gol */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'GOL_correl'); ?>
		<?php echo $form->textField($model,'GOL_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GOL_minuto'); ?>
		<?php echo $form->textField($model,'GOL_minuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GOL_asistente'); ?>
		<?php echo $form->textField($model,'GOL_asistente'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GOL_futCorrel'); ?>
		<?php echo $form->textField($model,'GOL_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GOL_parCorrel'); ?>
		<?php echo $form->textField($model,'GOL_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->