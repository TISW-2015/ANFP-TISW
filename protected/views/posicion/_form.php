<?php
/* @var $this PosicionController */
/* @var $model Posicion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'posicion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'POS_nombre'); ?>
		<?php echo $form->textField($model,'POS_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'POS_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'POS_codigo'); ?>
		<?php echo $form->textField($model,'POS_codigo',array('size'=>3,'maxlength'=>3)); ?>
		<?php echo $form->error($model,'POS_codigo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->