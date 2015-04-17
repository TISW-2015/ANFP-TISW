<?php
/* @var $this FutbolistaController */
/* @var $model Futbolista */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'torneo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
	<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_nombre'); ?>
		<?php echo $form->textField($model,'FUT_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_apellidoPat'); ?>
		<?php echo $form->textField($model,'FUT_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_apellidoPat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_apellidoMat'); ?>
		<?php echo $form->textField($model,'FUT_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_apellidoMat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_fechaNacimiento'); ?>
		<?php echo $form->textField($model,'FUT_fechaNacimiento'); ?>
		<?php echo $form->error($model,'FUT_fechaNacimiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FUT_nacionalidad'); ?>
		<?php echo $form->textField($model,'FUT_nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'FUT_nacionalidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'FUT_estado', array(
        '1' => 'Habilitado', '2' => 'Deshabilitado'
        ), array('empty' => 'Seleccione Estado' ));  ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'FUT_estadoCivil', array(
        '1' => 'Soltero', '2' => 'Casado', '3' => 'Viudo', '4' => 'Separado'
        ), array('empty' => 'Seleccione Estado Civil' ));  ?>
	</div>	

	<div class="row buttons">
		 <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->