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
		<?php echo $form->dropDownListControlGroup($model, 'FUT_nacionalidad', array(
        '1' => 'Afganistán', '2' => 'Albania', '3' => 'Argelia', '4' => 'Samoa Americana', '5' => 'Andorra', 
        '6' => 'Angola', '7' => 'Anguilla', '8' => 'Antártida', '9' => 'Antigua y Barbuda', '10' => 'Argentina',
        '11' => 'Armenia', '12' => 'Aruba', '13' => 'Australia', '14' => 'Austria', '15' => 'Azerbaiyán', '16' => 'Bahamas',
        '17' => 'Bahrein', '18' => 'Bangladesh', '19' => 'Barbados', '20' => 'Bielorrusia', '21' => 'Bélgica', '22' => 'Belice', '23' =>
        ), array('empty' => 'Seleccione Estado' ));  ?>
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

	,,,,,,,'Benín','Bermudas','Bután','Bolivia','Bosnia-Herzegovina','Botswana','Brasil','Brunei Darussalam','Bulgaria','Burkina Faso','Burundi','Camboya','Camerún','Canadá','Cabo Verde','Islas Caimán','Repúblicas Centroafricana','Chad','Chile','China','Isla De Navidad, Isla Christmas','Islas Cocos','Colombia','Comores','República Democrática del Congo','República del Congo','Islas Cook','Costa Rica','Costa de Marfil','Croacia','Cuba','Chipre','República Checa','Dinamarca','Djibouti, Yibuti','Dominica','Dominicana, República','Timor Oriental','Ecuador','Egipto','El Salvador','Guinea Ecuatorial','Eritrea','Estonia','Etiopía','Islas Malvinas','Islas Feroe','Fiyi','Finlandia','Francia','Guayana Francesa','Polinesia Francesa','Tierras Australes y Antárticas Francesas','Gabón','Gambia','Georgia','Alemania','Ghana','Gibraltar','Gran Bretaña','Grecia','Groenlandia','Granada','Guadalupe','Guam','Guatemala','República Guinea','Guinea Bissau','Guyana',' 	Santa Sede, Vaticano, Ciudad del Vaticano','Honduras','Hong Kong','Hungría','Islandia','India','Indonesia','Irán','Iraq','Irlanda','Israel','Italia','Jamaica','Japón','Jordania','Kazajstán','Kenia','Kiribati','Corea del Norte','Corea del Sur','Kosovo','Kuwait','Kirguistán','Laos; oficialmente: República Democrática Popular Lao','Letonia','Líbano','Lesotho','Liberia','Libia','Liechtenstein','Lituania','Luxemburgo','Macao','Macedonia','Madagascar','Malawi','Malasia','Maldivas','Malí','Malta','Islas Marshall','Martinica','Mauritania','Mauricio','Mayotte','México','Micronesia','Moldavia','Mónaco','Mongolia','Montenegro','Montserrat','Marruecos','Mozambique','Myanmar, Birmania','Namibia','Nauru','Nepal','Países Bajos, Holanda','Antillas Holandesas','Nueva Caledonia','Nueva Zelanda','Nicaragua','Niger','Nigeria','Niue','Marianas del Norte','Noruega','Omán','Pakistán','Palau','Territorios Palestinos','Panamá','Papúa-Nueva Guinea','Paraguay','Perú','Filipinas','Isla Pitcairn','Polonia','Portugal','Puerto Rico','Qatar','Reunión','Rumanía','Federación Rusa','Ruanda','San Cristobal y Nevis','Santa Lucía','San Vincente y Granadinas','Samoa','San Marino','Santo Tomé y Príncipe','Arabia Saudita','Senegal','Serbia','Seychelles','Sierra Leona','Singapur','Eslovaquia','Eslovenia','Islas Salomón','Somalia','Sudáfrica','Sudán del Sur','España','Sri Lanka','Sudán','Surinam','Swazilandia','Suecia','Suiza','Siria','Taiwan','Tadjikistan','Tanzania','Tailandia','Tíbet','Timor Oriental','Togo','Tokelau','Tonga','Trinidad y Tobago','Túnez','Turquía','Turkmenistan','Islas Turcas y Caicos','Tuvalu','Uganda','Ucrania','Emiratos Árabes Unidos','Reino Unido','Estados Unidos','Uruguay','Uzbekistán','Vanuatu','Ciudad del Vaticano','Venezuela','Vietnam','Islas Virgenes Británicas','Islas Virgenes Americanas','Wallis y Futuna','Sáhara Occidental ','Yemen','Zambia','Zimbabwe'

	<div class="row buttons">
		 <?php echo BsHtml::submitButton('Aceptar', array('color' => BsHtml::BUTTON_COLOR_PRIMARY)); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->