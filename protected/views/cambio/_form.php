<?php
/* @var $this CambioController */
/* @var $model Cambio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cambio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CAM_partCorrel'); ?>
		<?php echo $form->textField($model,'CAM_partCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CAM_partCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAM_jugEntra'); ?>
		<?php echo $form->textField($model,'CAM_jugEntra'); ?>
		<?php echo $form->error($model,'CAM_jugEntra'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CAM_jugSale'); ?>
		<?php echo $form->textField($model,'CAM_jugSale'); ?>
		<?php echo $form->error($model,'CAM_jugSale'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->