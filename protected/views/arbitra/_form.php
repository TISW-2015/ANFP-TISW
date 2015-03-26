<?php
/* @var $this ArbitraController */
/* @var $model Arbitra */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arbitra-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ARBI_parCorrel'); ?>
		<?php echo $form->textField($model,'ARBI_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ARBI_parCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARBI_arbCorrel'); ?>
		<?php echo $form->textField($model,'ARBI_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ARBI_arbCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ARBI_tipo'); ?>
		<?php echo $form->textField($model,'ARBI_tipo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ARBI_tipo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->