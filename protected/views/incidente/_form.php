<?php
/* @var $this IncidenteController */
/* @var $model Incidente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'incidente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'INC_parCorrel'); ?>
		<?php echo $form->textField($model,'INC_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'INC_parCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INC_arbCorrel'); ?>
		<?php echo $form->textField($model,'INC_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'INC_arbCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INC_descripcion'); ?>
		<?php echo $form->textArea($model,'INC_descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'INC_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INC_minuto'); ?>
		<?php echo $form->textField($model,'INC_minuto'); ?>
		<?php echo $form->error($model,'INC_minuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'INC_fecha'); ?>
		<?php echo $form->textField($model,'INC_fecha'); ?>
		<?php echo $form->error($model,'INC_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->