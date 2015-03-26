<?php
/* @var $this FormacionController */
/* @var $model Formacion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FOR_correl'); ?>
		<?php echo $form->textField($model,'FOR_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FOR_asignacion'); ?>
		<?php echo $form->textField($model,'FOR_asignacion',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FOR_equCorrel'); ?>
		<?php echo $form->textField($model,'FOR_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FOR_parCorrel'); ?>
		<?php echo $form->textField($model,'FOR_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FORMACIONcol'); ?>
		<?php echo $form->textField($model,'FORMACIONcol',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->