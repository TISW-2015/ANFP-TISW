<?php
/* @var $this SalarioController */
/* @var $model Salario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_correl'); ?>
		<?php echo $form->textField($model,'SAL_correl'); ?>
		<?php echo $form->error($model,'SAL_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_afpCorrel'); ?>
		<?php echo $form->textField($model,'SAL_afpCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAL_afpCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_JUG_correl'); ?>
		<?php echo $form->textField($model,'SAL_JUG_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAL_JUG_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_TEC_correl'); ?>
		<?php echo $form->textField($model,'SAL_TEC_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAL_TEC_correl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_saluCorrel'); ?>
		<?php echo $form->textField($model,'SAL_saluCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAL_saluCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_fechaPaga'); ?>
		<?php echo $form->textField($model,'SAL_fechaPaga'); ?>
		<?php echo $form->error($model,'SAL_fechaPaga'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_monto'); ?>
		<?php echo $form->textField($model,'SAL_monto'); ?>
		<?php echo $form->error($model,'SAL_monto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_salud'); ?>
		<?php echo $form->textField($model,'SAL_salud'); ?>
		<?php echo $form->error($model,'SAL_salud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_prevision'); ?>
		<?php echo $form->textField($model,'SAL_prevision'); ?>
		<?php echo $form->error($model,'SAL_prevision'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAL_sueldoLiquido'); ?>
		<?php echo $form->textField($model,'SAL_sueldoLiquido'); ?>
		<?php echo $form->error($model,'SAL_sueldoLiquido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->