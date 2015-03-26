<?php
/* @var $this DivisionController */
/* @var $model Division */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'division-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'DIV_nombre'); ?>
		<?php echo $form->textField($model,'DIV_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'DIV_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DIV_posicion'); ?>
		<?php echo $form->textField($model,'DIV_posicion'); ?>
		<?php echo $form->error($model,'DIV_posicion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->