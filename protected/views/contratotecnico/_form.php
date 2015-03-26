<?php
/* @var $this ContratotecnicoController */
/* @var $model Contratotecnico */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contratotecnico-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_TEC_tecCorrel'); ?>
		<?php echo $form->textField($model,'CON_TEC_tecCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CON_TEC_tecCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_TEC_equCorrel'); ?>
		<?php echo $form->textField($model,'CON_TEC_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CON_TEC_equCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_TEC_agno'); ?>
		<?php echo $form->textField($model,'CON_TEC_agno'); ?>
		<?php echo $form->error($model,'CON_TEC_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_TEC_periodo'); ?>
		<?php echo $form->textField($model,'CON_TEC_periodo'); ?>
		<?php echo $form->error($model,'CON_TEC_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_TEC_cargo'); ?>
		<?php echo $form->textField($model,'CON_TEC_cargo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'CON_TEC_cargo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->