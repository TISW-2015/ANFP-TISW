<?php

/**
 * This is the model class for table "estadio".
 *
 * The followings are the available columns in table 'estadio':
 * @property string $EST_correl
 * @property string $EST_nombre
 * @property integer $EST_capacidad
 * @property string $EST_estado
 *
 * The followings are the available model relations:
 * @property Anfitrion[] $anfitrions
 * @property Partido[] $partidos
 * @property Sancionestadio[] $sancionestadios
 */
class Estadio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'estadio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EST_capacidad', 'numerical', 'integerOnly'=>true),
			array('EST_nombre', 'length', 'max'=>45),
			array('EST_estado', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EST_correl, EST_nombre, EST_capacidad, EST_estado', 'safe', 'on'=>'search'),
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
			'anfitrions' => array(self::HAS_MANY, 'Anfitrion', 'ANF_estCorrel'),
			'partidos' => array(self::HAS_MANY, 'Partido', 'PAR_estCorrel'),
			'sancionestadios' => array(self::HAS_MANY, 'Sancionestadio', 'SAN_EST_estCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EST_correl' => 'Estadio Correl',
			'EST_nombre' => 'Nombre Estadio',
			'EST_capacidad' => 'Capacidad',
			'EST_estado' => 'Disponibilidad',
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

		$criteria->compare('EST_correl',$this->EST_correl,true);
		$criteria->compare('EST_nombre',$this->EST_nombre,true);
		$criteria->compare('EST_capacidad',$this->EST_capacidad);
		$criteria->compare('EST_estado',$this->EST_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Estadio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
