<?php
	Yii::app()->clientscript
		// use it when you need it!
		/*
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap.css' )
		->registerCssFile( Yii::app()->theme->baseUrl . '/css/bootstrap-responsive.css' )
		->registerCoreScript( 'jquery' )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-transition.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-alert.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-modal.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-dropdown.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-scrollspy.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tab.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-tooltip.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-popover.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-button.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-collapse.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-carousel.js', CClientScript::POS_END )
		->registerScriptFile( Yii::app()->theme->baseUrl . '/js/bootstrap-typeahead.js', CClientScript::POS_END )
		*/
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<meta name="language" content="en" />
<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!-- Le styles -->
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
<!-- Le fav and touch icons -->
</head>

<body>
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<!-- chupalá -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="#"><?php echo Yii::app()->name ?></a>
				<div class="nav-collapse">
					<?php

						echo BsHtml::pills(array(
    						array('label' => 'Inicio','url'=>array('/site/index'),'active' => true),
      						array('label'=>'Acerca de nosotros','url'=>array('/site/page', 'view'=>'about')),
      						array('label'=>'Contacto', 'url'=>array('/site/contact')),
      						array('label'=>'Futbolistas', 'url'=>array('/futbolista/admin')),
      						
      						array('label' => 'Contratos','items' => array(
            					array(
                					'label' => 'Contratos Futbolistas',
                					'url' => array('/contratojugador/admin','id'=>Contratojugador::model()->findByPk(array('CON_JUG_correl')),
           			 			)),
           			 			array(
                					'label' => 'Contratos Técnicos',
                					'url' => array('/contratotecnico/admin','id'=>Contratotecnico::model()->findByPk(array('CON_TEC_correl')),
           			 			)))),
      						array('label'=>'Estadios', 'url'=>array('/estadio/admin')),
      						array('label'=>'Árbitro', 'url'=>array('/arbitro/admin')),
      						array('label' => 'Help','url' => '#'),
      						array('label' => 'Partidos','items' => array(
            					array('label'=>'Fechas', 'url'=>array('/participa/index')),
            					array(
                					'label' => 'Apertura',
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
      						array('label' => 'Torneos','items' => array(
            					array(
                					'label' => 'Apertura'." ".(DATE('y')+2000),
                					'url' => array('/integra/admin','id'=>Torneo::model()->findByAttributes(array('TOR_agno'=>(DATE('y')+2000),'TOR_tipo'=>1))->TOR_correl),
           			 			),
           			 			array(
                					'label' => 'Clausura'." ".(DATE('y')+2000),
                					'url' => array('/integra/admin','id'=>Torneo::model()->findByAttributes(array('TOR_agno'=>(DATE('y')+2000),'TOR_tipo'=>2))->TOR_correl),
           			 			),
            				BsHtml::menuDivider(),
            				array(
                				'label' => 'Separate link',
                				'url' => '#'
            						),
            				array('label'=>'Historial', 'url'=>array('/torneo/admin'))
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
        				),
    				'visible'=>!Yii::app()->user->isGuest),
    						array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest)
					));
					?>
					
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
<?php  
	//$ano=Torneo::model()->findByAttributes(array('TOR_agno'=>(DATE('y')+2000),'TOR_periodo'=>1))->TOR_correl;
	//				var_dump($ano);
	//				die();
?>
	
	<div class="cont">
	<div class="container-fluid">
	  <?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs,
				'homeLink'=>false,
				'tagName'=>'ul',
				'separator'=>'',
				'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider">/</span></li>',
				'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
				'htmlOptions'=>array ('class'=>'breadcrumb')
			)); ?>
		<!-- breadcrumbs -->
	  <?php endif?>
	
	<?php echo $content ?>
	
	
	</div><!--/.fluid-container-->
	</div>
	
	<div class="extra">
		<div class="container">
			<div class="row">				
				
			</div> <!-- /container -->
		</div>
	</div>
	
	<div class="footer">
	  <div class="container">
		<div class="row">
		
			<div id="footer-terms" class="col-md-6">
				Copyright &copy; <?php echo date('Y'); ?> Por Freddy Masias, Juan Veliz.<br/>
				Todos los derechos reservados.<br/>
				<?php echo Yii::powered(); ?>
			</div> <!-- /.span6 -->
		 </div> <!-- /row -->
	  </div> <!-- /container -->
	</div>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.Rut.min.js"></script>
<?php Yii::app()->bootstrap->register(); ?>
</body>
</html>
