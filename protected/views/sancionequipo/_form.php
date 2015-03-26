<?php
/* @var $this SancionequipoController */
/* @var $model Sancionequipo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sancionequipo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EQU_equCorrel'); ?>
		<?php echo $form->textField($model,'SAN_EQU_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAN_EQU_equCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EQU_arbCorrel'); ?>
		<?php echo $form->textField($model,'SAN_EQU_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAN_EQU_arbCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EQU_motivo'); ?>
		<?php echo $form->textArea($model,'SAN_EQU_motivo',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SAN_EQU_motivo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EQU_descripcion'); ?>
		<?php echo $form->textArea($model,'SAN_EQU_descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SAN_EQU_descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EQU_castigoMonto'); ?>
		<?php echo $form->textField($model,'SAN_EQU_castigoMonto'); ?>
		<?php echo $form->error($model,'SAN_EQU_castigoMonto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_EQU_fecha'); ?>
		<?php echo $form->textField($model,'SAN_EQU_fecha'); ?>
		<?php echo $form->error($model,'SAN_EQU_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->