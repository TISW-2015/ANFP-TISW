<?php
/* @var $this JuegaController */
/* @var $model Juega */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'JUE_correl'); ?>
		<?php echo $form->textField($model,'JUE_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUE_futCorrel'); ?>
		<?php echo $form->textField($model,'JUE_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUE_forCorrel'); ?>
		<?php echo $form->textField($model,'JUE_forCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'JUE_posCorrel'); ?>
		<?php echo $form->textField($model,'JUE_posCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->