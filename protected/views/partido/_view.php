<?php
/* @var $this ParticipaController */
/* @var $data Participa */
$part= Participa::model()->findAllByAttributes(array('PART_parCorrel'=>$data->PAR_correl));
$equipo1=Equipo::model()->findByPk($part[0]->PART_equCorrel);
$equipo2=Equipo::model()->findByPk($part[1]->PART_equCorrel);

?>

<div class="view">
<div class="parent">
    <div class="left">
        <h3><center><b><?php echo $equipo1->EQU_nombre ?></b><br></h3>
        <?php  
        echo '<img src="'.Yii::app()->request->baseUrl.'/images/'.$equipo1->EQU_correl.'.png">';
        ?></center>
        <!-- <br />
        <b> <?php //echo $part->PART_posicion ?></b>
        <br /> -->
    </div>
    <div class="center">
        <center>
        <b><h1><?php echo $part[0]->PART_goles ?></b>
        <!-- <b><?php //echo CHtml::encode($data->getAttributeLabel('PART_goles')); ?>:</b>
        <?php //echo CHtml::encode($data->PART_goles); ?> -->
        <?php  echo '<img src="'.Yii::app()->request->baseUrl.'/images/versus.ico">';?>
        <?php echo $part[1]->PART_goles ?></center>
        <center><h1><?php echo $data->PAR_programacion ?></center>
    </div>
    <div class="right">
        <h3><center><b><?php echo $equipo2->EQU_nombre ?></b><br></h3>
        <?php  
        echo '<img src="'.Yii::app()->request->baseUrl.'/images/'.$equipo2->EQU_correl.'.png">';
        ?></center>
    </div>
    <div style="clear:both;"></div>
</div>
</div>