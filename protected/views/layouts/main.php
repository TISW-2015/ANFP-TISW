<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="es" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
		<!--<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Torneo', 'url'=>array('/torneo/admin')),
				array('label'=>'Equipo', 'url'=>array('/equipo/admin')),
<<<<<<< HEAD
				//array('label'=>'Lesión', 'url'=>array('/Lesion/admin')),
				array('label'=>'Futbolista', 'url'=>array('/Futbolista/admin')),
				array('label'=>'Falta', 'url'=>array('/Falta/admin')),
=======
				array('label'=>'Partidos', 'url'=>array('/partido/admin')),
				array('label'=>'Resumen Partido', 'url'=>array('/participa/admin')),
>>>>>>> JuanoV/master
				//array('label'=>'Tabla', 'url'=>array('/integra/admin')),
				//array('label'=>'Insidente', 'url'=>array('/incidente/admin')),
				//array('label'=>'Salario', 'url'=>array('/salario/admin')),
				//array('label'=>'AFP', 'url'=>array('/afp/admin')),
				//array('label'=>'Fonasa', 'url'=>array('/salud/admin')),
				//array('label'=>'Isapre', 'url'=>array('/isapre/admin')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>-->
		<?php
echo BsHtml::pills(array(
    array('label' => 'Home','url'=>array('/site/index'),'active' => true),
    array('label'=>'About','url'=>array('/site/page', 'view'=>'about')),
    array('label'=>'Contact', 'url'=>array('/site/contact')),
    array('label' => 'Help','url' => '#'),
    array('label' => 'Torneos','items' => array(
            array('label'=>'Torneo', 'url'=>array('/torneo/admin')),
            array(
                'label' => 'Something else here',
                'url' => '#'
            ),
            BsHtml::menuDivider(),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            array(
                'label' => 'Separate link',
                'url' => '#'
            )
        )
    ),
    array('label' => 'Mi cuenta','items' => array(
            array(
                'label' => 'Another action',
                'url' => '#'
            ),
            array(
                'label' => 'Something else here',
                'url' => '#'
            ),
            BsHtml::menuDivider(),
            array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
            array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
            array(
                'label' => 'Separate link',
                'url' => '#'
            )
        )
    )
));
?>

	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.Rut.min.js"></script>
<?php Yii::app()->bootstrap->register(); ?>

</body>
</html>
