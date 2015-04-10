<?php

/**
 * This is the model class for table "pertenece".
 *
 * The followings are the available columns in table 'pertenece':
 * @property string $PER_correl
 * @property string $PER_equCorrel
 * @property string $PER_divCorrel
 * @property string $PER_fecha
 *
 * The followings are the available model relations:
 * @property Division $pERDivCorrel
 * @property Equipo $pEREquCorrel
 */
class Pertenece extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pertenece';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('PER_equCorrel, PER_divCorrel', 'length', 'max'=>10),
			array('PER_fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('PER_correl, PER_equCorrel, PER_divCorrel, PER_fecha', 'safe', 'on'=>'search'),
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
			'pERDivCorrel' => array(self::BELONGS_TO, 'Division', 'PER_divCorrel'),
			'pEREquCorrel' => array(self::BELONGS_TO, 'Equipo', 'PER_equCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'PER_correl' => 'Per Correl',
			'PER_equCorrel' => 'Per Equ Correl',
			'PER_divCorrel' => 'Division',
			'PER_fecha' => 'Fecha',
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

		$criteria->compare('PER_correl',$this->PER_correl,true);
		$criteria->compare('PER_equCorrel',$this->PER_equCorrel,true);
		$criteria->compare('PER_divCorrel',$this->PER_divCorrel,true);
		$criteria->compare('PER_fecha',$this->PER_fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Pertenece the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
