<?php

/**
 * This is the model class for table "gol".
 *
 * The followings are the available columns in table 'gol':
 * @property string $GOL_correl
 * @property integer $GOL_minuto
 * @property integer $GOL_asistente
 * @property string $GOL_futCorrel
 * @property string $GOL_parCorrel
 *
 * The followings are the available model relations:
 * @property Futbolista $gOLFutCorrel
 * @property Partido $gOLParCorrel
 */
class Gol extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'gol';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('GOL_parCorrel', 'required'),
			array('GOL_minuto, GOL_asistente', 'numerical', 'integerOnly'=>true),
			array('GOL_futCorrel, GOL_parCorrel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('GOL_correl, GOL_minuto, GOL_asistente, GOL_futCorrel, GOL_parCorrel', 'safe', 'on'=>'search'),
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
			'gOLFutCorrel' => array(self::BELONGS_TO, 'Futbolista', 'GOL_futCorrel'),
			'gOLParCorrel' => array(self::BELONGS_TO, 'Partido', 'GOL_parCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GOL_correl' => 'Gol Correl',
			'GOL_minuto' => 'Gol Minuto',
			'GOL_asistente' => 'Gol Asistente',
			'GOL_futCorrel' => 'Gol Fut Correl',
			'GOL_parCorrel' => 'Gol Par Correl',
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

		$criteria->compare('GOL_correl',$this->GOL_correl,true);
		$criteria->compare('GOL_minuto',$this->GOL_minuto);
		$criteria->compare('GOL_asistente',$this->GOL_asistente);
		$criteria->compare('GOL_futCorrel',$this->GOL_futCorrel,true);
		$criteria->compare('GOL_parCorrel',$this->GOL_parCorrel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gol the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
