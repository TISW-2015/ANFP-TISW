<?php
/* @var $this SaludController */
/* @var $model Salud */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'salud-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SALU_porcentaje'); ?>
		<?php echo $form->textField($model,'SALU_porcentaje'); ?>
		<?php echo $form->error($model,'SALU_porcentaje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ISAPRE_ISA_correl'); ?>
		<?php echo $form->textField($model,'ISAPRE_ISA_correl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ISAPRE_ISA_correl'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->