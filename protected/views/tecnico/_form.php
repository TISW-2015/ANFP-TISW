<?php
/* @var $this TecnicoController */
/* @var $model Tecnico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tecnico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TEC_nombre'); ?>
		<?php echo $form->textField($model,'TEC_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TEC_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TEC_apellidoPat'); ?>
		<?php echo $form->textField($model,'TEC_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TEC_apellidoPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TEC_apellidoMat'); ?>
		<?php echo $form->textField($model,'TEC_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TEC_apellidoMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TEC_fechaNac'); ?>
		<?php echo $form->textField($model,'TEC_fechaNac'); ?>
		<?php echo $form->error($model,'TEC_fechaNac'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TEC_nacionalidad'); ?>
		<?php echo $form->textField($model,'TEC_nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TEC_nacionalidad'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->