<?php
/* @var $this EquipoController */
/* @var $model Equipo */
/* @var $form CActiveForm */
$aux= new Pertenece;
?>
<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'equipo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EQU_nombre'); ?>
		<?php echo $form->textField($model,'EQU_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EQU_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EQU_presidente'); ?>
		<?php echo $form->textField($model,'EQU_presidente',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EQU_presidente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EQU_direccionClub'); ?>
		<?php echo $form->textField($model,'EQU_direccionClub',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EQU_direccionClub'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EQU_sitio'); ?>
		<?php echo $form->textField($model,'EQU_sitio',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EQU_sitio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EQU_telefono'); ?>
		<?php echo $form->textField($model,'EQU_telefono',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EQU_telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EQU_logo'); ?>
		<?php echo $form->textField($model,'EQU_logo',array('size'=>60,'maxlength'=>400)); ?>
		<?php echo $form->error($model,'EQU_logo'); ?>
	</div>
	<div class="row">
		<?php echo $form->dropDownListControlGroup($aux,'PER_divCorrel', array(
        CHtml::listData(Division::model()->findAll(),'DIV_correl','DIV_nombre'),
        ), array('empty' => 'Seleccione División',
        ));?>
	</div>
	<div class="row">
		<?php echo $form->dateFieldControlGroup($aux,'PER_fecha'); ?>
	</div>

	<div class="row buttons">
		<?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->