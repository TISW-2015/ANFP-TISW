<?php
/* @var $this CambioController */
/* @var $model Cambio */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CAM_correl'); ?>
		<?php echo $form->textField($model,'CAM_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAM_partCorrel'); ?>
		<?php echo $form->textField($model,'CAM_partCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAM_jugEntra'); ?>
		<?php echo $form->textField($model,'CAM_jugEntra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CAM_jugSale'); ?>
		<?php echo $form->textField($model,'CAM_jugSale'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->