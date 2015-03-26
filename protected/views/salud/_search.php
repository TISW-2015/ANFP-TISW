<?php
/* @var $this SaludController */
/* @var $model Salud */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SALU_correl'); ?>
		<?php echo $form->textField($model,'SALU_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SALU_porcentaje'); ?>
		<?php echo $form->textField($model,'SALU_porcentaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ISAPRE_ISA_correl'); ?>
		<?php echo $form->textField($model,'ISAPRE_ISA_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->