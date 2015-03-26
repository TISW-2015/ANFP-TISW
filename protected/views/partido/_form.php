<?php
/* @var $this PartidoController */
/* @var $model Partido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_estCorrel'); ?>
		<?php echo $form->textField($model,'PAR_estCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PAR_estCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_programacion'); ?>
		<?php echo $form->textField($model,'PAR_programacion'); ?>
		<?php echo $form->error($model,'PAR_programacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_hora'); ?>
		<?php echo $form->textField($model,'PAR_hora'); ?>
		<?php echo $form->error($model,'PAR_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_fecha'); ?>
		<?php echo $form->textField($model,'PAR_fecha'); ?>
		<?php echo $form->error($model,'PAR_fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_asistencia'); ?>
		<?php echo $form->textField($model,'PAR_asistencia'); ?>
		<?php echo $form->error($model,'PAR_asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_recaudo'); ?>
		<?php echo $form->textField($model,'PAR_recaudo'); ?>
		<?php echo $form->error($model,'PAR_recaudo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_estado'); ?>
		<?php echo $form->textField($model,'PAR_estado',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PAR_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_tiempo'); ?>
		<?php echo $form->textField($model,'PAR_tiempo'); ?>
		<?php echo $form->error($model,'PAR_tiempo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->