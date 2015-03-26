<?php
/* @var $this GolController */
/* @var $model Gol */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gol-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'GOL_minuto'); ?>
		<?php echo $form->textField($model,'GOL_minuto'); ?>
		<?php echo $form->error($model,'GOL_minuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GOL_asistente'); ?>
		<?php echo $form->textField($model,'GOL_asistente'); ?>
		<?php echo $form->error($model,'GOL_asistente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GOL_futCorrel'); ?>
		<?php echo $form->textField($model,'GOL_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'GOL_futCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GOL_parCorrel'); ?>
		<?php echo $form->textField($model,'GOL_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'GOL_parCorrel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->