<?php
/* @var $this FaltaController */
/* @var $model Falta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'falta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FAL_castigo'); ?>
		<?php echo $form->textField($model,'FAL_castigo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FAL_castigo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FAL_minuto'); ?>
		<?php echo $form->textField($model,'FAL_minuto',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FAL_minuto'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FAL_futCorrel'); ?>
		<?php echo $form->textField($model,'FAL_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FAL_futCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FAL_parCorrel'); ?>
		<?php echo $form->textField($model,'FAL_parCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FAL_parCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FAL_arbCorrel'); ?>
		<?php echo $form->textField($model,'FAL_arbCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FAL_arbCorrel'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->