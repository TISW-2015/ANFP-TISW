<?php
/* @var $this ParticipaController */
/* @var $model Participa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'participa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_equCorrel'); ?>
		<?php echo $form->textField($model,'PART_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PART_equCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_parCorrel'); ?>
		<?php echo $form->textField($model,'PART_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PART_parCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_posicion'); ?>
		<?php echo $form->textField($model,'PART_posicion',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PART_posicion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_goles'); ?>
		<?php echo $form->textField($model,'PART_goles'); ?>
		<?php echo $form->error($model,'PART_goles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_faltas'); ?>
		<?php echo $form->textField($model,'PART_faltas'); ?>
		<?php echo $form->error($model,'PART_faltas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_tarjetaAmarilla'); ?>
		<?php echo $form->textField($model,'PART_tarjetaAmarilla'); ?>
		<?php echo $form->error($model,'PART_tarjetaAmarilla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_tarjetaRoja'); ?>
		<?php echo $form->textField($model,'PART_tarjetaRoja'); ?>
		<?php echo $form->error($model,'PART_tarjetaRoja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_tiroLibre'); ?>
		<?php echo $form->textField($model,'PART_tiroLibre'); ?>
		<?php echo $form->error($model,'PART_tiroLibre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_corner'); ?>
		<?php echo $form->textField($model,'PART_corner'); ?>
		<?php echo $form->error($model,'PART_corner'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_penal'); ?>
		<?php echo $form->textField($model,'PART_penal'); ?>
		<?php echo $form->error($model,'PART_penal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PART_extranjero'); ?>
		<?php echo $form->textField($model,'PART_extranjero'); ?>
		<?php echo $form->error($model,'PART_extranjero'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->