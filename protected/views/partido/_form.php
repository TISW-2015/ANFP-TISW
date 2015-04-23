<?php
/* @var $this PartidoController */
/* @var $model Partido */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('bootstrap.widgets.BsActiveForm', array(
	'id'=>'partido-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

 <p class="help-block">Campos con <span class="required">*</span> son obligatorios.</p>


	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_estCorrel'); ?>
		<?php echo $form->textField($model,'PAR_estCorrel',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'PAR_estCorrel'); ?>
	</div>

	<div class="row">
		<?php echo $form->dateFieldControlGroup($model,'PAR_programacion'); ?>
		<?php echo $form->error($model,'PAR_programacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_hora'); ?>
		<?php echo $form->textField($model,'PAR_hora'); ?>
		<?php echo $form->error($model,'PAR_hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'PAR_fecha', array(
        '1' => '1', '2' => '2','3' => '3', '4' => '4','5' => '5', '6' => '6','7' => '7', '8' => '8','9' => '9', '10' => '10','11' => '11',
         '12' => '12','13' => '13', '14' => '14','15' => '15', '16' => '16','17' => '17'
        ), array('empty' => 'Seleccione Fecha' ));  ?>
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
		<?php echo $form->dropDownListControlGroup($model, 'PAR_estado', array(
        '1' => 'En espera','2'=>'En juego','3'=>'Terminado'
        ), array('empty' => 'Seleccione Estado' ));  ?>
		<?php echo $form->error($model,'PAR_estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PAR_tiempo'); ?>
		<?php echo $form->textField($model,'PAR_tiempo'); ?>
		<?php echo $form->error($model,'PAR_tiempo'); ?>
	</div>

	<div class="row buttons">
		<?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->