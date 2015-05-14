<?php
/* @var $this EstadioController */
/* @var $model Estadio */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'estadio-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con  <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'EST_nombre'); ?>
		<?php echo $form->textField($model,'EST_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'EST_nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'EST_capacidad'); ?>
		<?php echo $form->textField($model,'EST_capacidad'); ?>
		<?php echo $form->error($model,'EST_capacidad'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'EST_estado', array(
        '1' => 'Disponible', '2' => 'No Disponible'
        ), array('empty' => 'Seleccione Disponibilidad' ));  ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->