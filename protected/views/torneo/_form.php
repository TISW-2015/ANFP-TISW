<?php
/* @var $this TorneoController */
/* @var $model Torneo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'torneo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TOR_division'); ?>
		<?php echo $form->textField($model,'TOR_division',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'TOR_division'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOR_nombre'); ?>
		<?php echo $form->textField($model,'TOR_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TOR_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOR_agno'); ?>
		<?php echo $form->textField($model,'TOR_agno'); ?>
		<?php echo $form->error($model,'TOR_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOR_periodo'); ?>
		<?php echo $form->textField($model,'TOR_periodo'); ?>
		<?php echo $form->error($model,'TOR_periodo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOR_premio'); ?>
		<?php echo $form->textField($model,'TOR_premio'); ?>
		<?php echo $form->error($model,'TOR_premio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TOR_ganador'); ?>
		<?php echo $form->textField($model,'TOR_ganador'); ?>
		<?php echo $form->error($model,'TOR_ganador'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->