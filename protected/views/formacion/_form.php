<?php
/* @var $this FormacionController */
/* @var $model Formacion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'formacion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FOR_asignacion'); ?>
		<?php echo $form->textField($model,'FOR_asignacion',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FOR_asignacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FOR_equCorrel'); ?>
		<?php echo $form->textField($model,'FOR_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FOR_equCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FOR_parCorrel'); ?>
		<?php echo $form->textField($model,'FOR_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FOR_parCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FORMACIONcol'); ?>
		<?php echo $form->textField($model,'FORMACIONcol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FORMACIONcol'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->