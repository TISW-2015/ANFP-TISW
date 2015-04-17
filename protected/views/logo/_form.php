<?php
/* @var $this LogoController */
/* @var $model Logo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'logo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'LOG_equCorrel'); ?>
		<?php echo $form->textField($model,'LOG_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'LOG_equCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LOG_url'); ?>
		<?php echo $form->textField($model,'LOG_url',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'LOG_url'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LOG_nombre'); ?>
		<?php echo $form->textField($model,'LOG_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'LOG_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'LOG_estado'); ?>
		<?php echo $form->textField($model,'LOG_estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'LOG_estado'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->