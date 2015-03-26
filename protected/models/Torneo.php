<?php

/**
 * This is the model class for table "torneo".
 *
 * The followings are the available columns in table 'torneo':
 * @property string $TOR_correl
 * @property string $TOR_division
 * @property string $TOR_nombre
 * @property integer $TOR_agno
 * @property integer $TOR_periodo
 * @property integer $TOR_premio
 * @property integer $TOR_ganador
 *
 * The followings are the available model relations:
 * @property Integra[] $integras
 * @property Division $tORDivision
 */
class Torneo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'torneo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TOR_division', 'required'),
			array('TOR_agno, TOR_periodo, TOR_premio, TOR_ganador', 'numerical', 'integerOnly'=>true),
			array('TOR_division', 'length', 'max'=>10),
			array('TOR_nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TOR_correl, TOR_division, TOR_nombre, TOR_agno, TOR_periodo, TOR_premio, TOR_ganador', 'safe', 'on'=>'search'),
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
			'integras' => array(self::HAS_MANY, 'Integra', 'INT_torCorrel'),
			'tORDivision' => array(self::BELONGS_TO, 'Division', 'TOR_division'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TOR_correl' => 'Tor Correl',
			'TOR_division' => 'Tor Division',
			'TOR_nombre' => 'Tor Nombre',
			'TOR_agno' => 'Tor Agno',
			'TOR_periodo' => 'Tor Periodo',
			'TOR_premio' => 'Tor Premio',
			'TOR_ganador' => 'Tor Ganador',
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

		$criteria->compare('TOR_correl',$this->TOR_correl,true);
		$criteria->compare('TOR_division',$this->TOR_division,true);
		$criteria->compare('TOR_nombre',$this->TOR_nombre,true);
		$criteria->compare('TOR_agno',$this->TOR_agno);
		$criteria->compare('TOR_periodo',$this->TOR_periodo);
		$criteria->compare('TOR_premio',$this->TOR_premio);
		$criteria->compare('TOR_ganador',$this->TOR_ganador);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Torneo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
