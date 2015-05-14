<?php
/* @var $this ContratojugadorController */
/* @var $model Contratojugador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contratojugador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_equCorrel'); ?>
		<?php echo $form->textField($model,'CON_JUG_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CON_JUG_equCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_agno'); ?>
		<?php echo $form->textField($model,'CON_JUG_agno'); ?>
		<?php echo $form->error($model,'CON_JUG_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_periodo'); ?>
		<?php echo $form->textField($model,'CON_JUG_periodo'); ?>
		<?php echo $form->error($model,'CON_JUG_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_futCorrel'); ?>
		<?php echo $form->textField($model,'CON_JUG_futCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CON_JUG_futCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_numero'); ?>
		<?php echo $form->textField($model,'CON_JUG_numero'); ?>
		<?php echo $form->error($model,'CON_JUG_numero'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_amarilla'); ?>
		<?php echo $form->textField($model,'CON_JUG_amarilla'); ?>
		<?php echo $form->error($model,'CON_JUG_amarilla'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_roja'); ?>
		<?php echo $form->textField($model,'CON_JUG_roja'); ?>
		<?php echo $form->error($model,'CON_JUG_roja'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_goles'); ?>
		<?php echo $form->textField($model,'CON_JUG_goles'); ?>
		<?php echo $form->error($model,'CON_JUG_goles'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_asistencia'); ?>
		<?php echo $form->textField($model,'CON_JUG_asistencia'); ?>
		<?php echo $form->error($model,'CON_JUG_asistencia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_JUG_falta'); ?>
		<?php echo $form->textField($model,'CON_JUG_falta'); ?>
		<?php echo $form->error($model,'CON_JUG_falta'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->