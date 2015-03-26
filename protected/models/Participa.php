<?php

/**
 * This is the model class for table "participa".
 *
 * The followings are the available columns in table 'participa':
 * @property string $PART_correl
 * @property string $PART_equCorrel
 * @property string $PART_parCorrel
 * @property string $PART_posicion
 * @property integer $PART_goles
 * @property integer $PART_faltas
 * @property integer $PART_tarjetaAmarilla
 * @property integer $PART_tarjetaRoja
 * @property integer $PART_tiroLibre
 * @property integer $PART_corner
 * @property integer $PART_penal
 * @property integer $PART_extranjero
 *
 * The followings are the available model relations:
 * @property Cambio[] $cambios
 * @property Equipo $pARTEquCorrel
 * @property Partido $pARTParCorrel
 */
class Participa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'participa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PART_goles, PART_faltas, PART_tarjetaAmarilla, PART_tarjetaRoja, PART_tiroLibre, PART_corner, PART_penal, PART_extranjero', 'numerical', 'integerOnly'=>true),
			array('PART_equCorrel, PART_parCorrel, PART_posicion', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PART_correl, PART_equCorrel, PART_parCorrel, PART_posicion, PART_goles, PART_faltas, PART_tarjetaAmarilla, PART_tarjetaRoja, PART_tiroLibre, PART_corner, PART_penal, PART_extranjero', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'cambios' => array(self::HAS_MANY, 'Cambio', 'CAM_partCorrel'),
			'pARTEquCorrel' => array(self::BELONGS_TO, 'Equipo', 'PART_equCorrel'),
			'pARTParCorrel' => array(self::BELONGS_TO, 'Partido', 'PART_parCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PART_correl' => 'Part Correl',
			'PART_equCorrel' => 'Part Equ Correl',
			'PART_parCorrel' => 'Part Par Correl',
			'PART_posicion' => 'Part Posicion',
			'PART_goles' => 'Part Goles',
			'PART_faltas' => 'Part Faltas',
			'PART_tarjetaAmarilla' => 'Part Tarjeta Amarilla',
			'PART_tarjetaRoja' => 'Part Tarjeta Roja',
			'PART_tiroLibre' => 'Part Tiro Libre',
			'PART_corner' => 'Part Corner',
			'PART_penal' => 'Part Penal',
			'PART_extranjero' => 'Part Extranjero',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('PART_correl',$this->PART_correl,true);
		$criteria->compare('PART_equCorrel',$this->PART_equCorrel,true);
		$criteria->compare('PART_parCorrel',$this->PART_parCorrel,true);
		$criteria->compare('PART_posicion',$this->PART_posicion,true);
		$criteria->compare('PART_goles',$this->PART_goles);
		$criteria->compare('PART_faltas',$this->PART_faltas);
		$criteria->compare('PART_tarjetaAmarilla',$this->PART_tarjetaAmarilla);
		$criteria->compare('PART_tarjetaRoja',$this->PART_tarjetaRoja);
		$criteria->compare('PART_tiroLibre',$this->PART_tiroLibre);
		$criteria->compare('PART_corner',$this->PART_corner);
		$criteria->compare('PART_penal',$this->PART_penal);
		$criteria->compare('PART_extranjero',$this->PART_extranjero);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Participa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
