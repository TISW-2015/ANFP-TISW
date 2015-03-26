<?php
/* @var $this ArbitroController */
/* @var $model Arbitro */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ARB_correl'); ?>
		<?php echo $form->textField($model,'ARB_correl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARB_nombre'); ?>
		<?php echo $form->textField($model,'ARB_nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARB_apellidoPat'); ?>
		<?php echo $form->textField($model,'ARB_apellidoPat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARB_apellidoMat'); ?>
		<?php echo $form->textField($model,'ARB_apellidoMat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARB_fechaNac'); ?>
		<?php echo $form->textField($model,'ARB_fechaNac'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARB_nacionalidad'); ?>
		<?php echo $form->textField($model,'ARB_nacionalidad',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->