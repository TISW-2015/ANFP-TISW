<?php
/* @var $this AnfitrionController */
/* @var $model Anfitrion */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anfitrion-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ANF_equCorrel'); ?>
		<?php echo $form->textField($model,'ANF_equCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ANF_equCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANF_estCorrel'); ?>
		<?php echo $form->textField($model,'ANF_estCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ANF_estCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANF_prioridad'); ?>
		<?php echo $form->textField($model,'ANF_prioridad',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ANF_prioridad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANF_agno'); ?>
		<?php echo $form->textField($model,'ANF_agno'); ?>
		<?php echo $form->error($model,'ANF_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANF_periodo'); ?>
		<?php echo $form->textField($model,'ANF_periodo'); ?>
		<?php echo $form->error($model,'ANF_periodo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->