<?php

/**
 * This is the model class for table "isapre".
 *
 * The followings are the available columns in table 'isapre':
 * @property string $ISA_correl
 * @property string $ISA_nombre
 * @property integer $ISA_montoPlan
 *
 * The followings are the available model relations:
 * @property Salud[] $saluds
 */
class Isapre extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'isapre';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ISA_montoPlan', 'numerical', 'integerOnly'=>true),
			array('ISA_nombre', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ISA_correl, ISA_nombre, ISA_montoPlan', 'safe', 'on'=>'search'),
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
			'saluds' => array(self::HAS_MANY, 'Salud', 'ISAPRE_ISA_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ISA_correl' => 'Isa Correl',
			'ISA_nombre' => 'Isa Nombre',
			'ISA_montoPlan' => 'Isa Monto Plan',
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

		$criteria->compare('ISA_correl',$this->ISA_correl,true);
		$criteria->compare('ISA_nombre',$this->ISA_nombre,true);
		$criteria->compare('ISA_montoPlan',$this->ISA_montoPlan);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Isapre the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
