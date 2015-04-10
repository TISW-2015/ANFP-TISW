<?php
/* @var $this TorneoController */
/* @var $model Torneo */
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
		<?php echo $form->labelEx($model,'TOR_nombre'); ?>
		<?php echo $form->textField($model,'TOR_nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'TOR_nombre'); ?>
	</div>
	<div class="row">
		<?php echo $form->dropDownListControlGroup($model,'TOR_division', array(
        CHtml::listData(Division::model()->findAll(),'DIV_correl','DIV_nombre'),
        ), array('empty' => 'Seleccione División',
        ));?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'TOR_agno'); ?>
		<?php echo $form->textField($model,'TOR_agno'); ?>
		<?php echo $form->error($model,'TOR_agno'); ?>
	</div>

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'TOR_periodo', array(
        '1' => '1', '2' => '2'
        ), array('empty' => 'Seleccione Periodo' ));  ?>
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

	<div class="row">
		<?php echo $form->dropDownListControlGroup($model, 'TOR_tipo', array(
        '1' => 'Apertura', '2' => 'Clausura','3'=>'Liguilla'
        ), array('empty' => 'Seleccione Periodo' ));  ?>
	</div>

	<div class="row buttons">
		 <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->