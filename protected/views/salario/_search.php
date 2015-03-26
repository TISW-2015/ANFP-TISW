<?php
/* @var $this SalarioController */
/* @var $model Salario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'SAL_correl'); ?>
		<?php echo $form->textField($model,'SAL_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_afpCorrel'); ?>
		<?php echo $form->textField($model,'SAL_afpCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_JUG_correl'); ?>
		<?php echo $form->textField($model,'SAL_JUG_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_TEC_correl'); ?>
		<?php echo $form->textField($model,'SAL_TEC_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_saluCorrel'); ?>
		<?php echo $form->textField($model,'SAL_saluCorrel',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_fechaPaga'); ?>
		<?php echo $form->textField($model,'SAL_fechaPaga'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_monto'); ?>
		<?php echo $form->textField($model,'SAL_monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_salud'); ?>
		<?php echo $form->textField($model,'SAL_salud'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_prevision'); ?>
		<?php echo $form->textField($model,'SAL_prevision'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SAL_sueldoLiquido'); ?>
		<?php echo $form->textField($model,'SAL_sueldoLiquido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->