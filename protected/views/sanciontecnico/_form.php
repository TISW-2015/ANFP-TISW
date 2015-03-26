<?php
/* @var $this SanciontecnicoController */
/* @var $model Sanciontecnico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'sanciontecnico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_TEC_arbCorrel'); ?>
		<?php echo $form->textField($model,'SAN_TEC_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAN_TEC_arbCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_TEC_tecCorrel'); ?>
		<?php echo $form->textField($model,'SAN_TEC_tecCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'SAN_TEC_tecCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_TEC_fecha'); ?>
		<?php echo $form->textField($model,'SAN_TEC_fecha'); ?>
		<?php echo $form->error($model,'SAN_TEC_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_TEC_castigo'); ?>
		<?php echo $form->textField($model,'SAN_TEC_castigo'); ?>
		<?php echo $form->error($model,'SAN_TEC_castigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_TEC_partidoPerido'); ?>
		<?php echo $form->textField($model,'SAN_TEC_partidoPerido'); ?>
		<?php echo $form->error($model,'SAN_TEC_partidoPerido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'SAN_TEC_descripcion'); ?>
		<?php echo $form->textArea($model,'SAN_TEC_descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'SAN_TEC_descripcion'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->