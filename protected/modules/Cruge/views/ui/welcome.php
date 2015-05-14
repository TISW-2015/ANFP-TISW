<?php
// llamada cuando el actionRegistration ha insertado a un usuario
?>
<div class='form'>
    <h1><?php echo CrugeTranslator::t("Bienvenido");?></h1>

    <p><b><?php echo CrugeTranslator::t('registration', 'Su cuenta ha sido creada exitosamente!'); ?></b></p>
    <p><?php echo CrugeTranslator::t('registration', 'Click aqui para ingresar utilizando nuevas credenciales:'); ?>
        <?php echo Yii::app()->user->ui->loginLink; ?>
    </p>
</div>