<?php
/* @var $this UsuarioController */
/* @var $model Usuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_role'); ?>
		<?php echo $form->textField($model,'USU_role',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_role'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_nombre'); ?>
		<?php echo $form->textField($model,'USU_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_clave'); ?>
		<?php echo $form->textField($model,'USU_clave',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_clave'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_email'); ?>
		<?php echo $form->textField($model,'USU_email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USU_telefono'); ?>
		<?php echo $form->textField($model,'USU_telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'USU_telefono'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->