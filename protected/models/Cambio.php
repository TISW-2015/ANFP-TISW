<?php

/**
 * This is the model class for table "cambio".
 *
 * The followings are the available columns in table 'cambio':
 * @property string $CAM_correl
 * @property string $CAM_partCorrel
 * @property integer $CAM_jugEntra
 * @property integer $CAM_jugSale
 *
 * The followings are the available model relations:
 * @property Participa $cAMPartCorrel
 */
class Cambio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cambio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CAM_partCorrel', 'required'),
			array('CAM_jugEntra, CAM_jugSale', 'numerical', 'integerOnly'=>true),
			array('CAM_partCorrel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CAM_correl, CAM_partCorrel, CAM_jugEntra, CAM_jugSale', 'safe', 'on'=>'search'),
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
			'cAMPartCorrel' => array(self::BELONGS_TO, 'Participa', 'CAM_partCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CAM_correl' => 'Cam Correl',
			'CAM_partCorrel' => 'Cam Part Correl',
			'CAM_jugEntra' => 'Cam Jug Entra',
			'CAM_jugSale' => 'Cam Jug Sale',
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

		$criteria->compare('CAM_correl',$this->CAM_correl,true);
		$criteria->compare('CAM_partCorrel',$this->CAM_partCorrel,true);
		$criteria->compare('CAM_jugEntra',$this->CAM_jugEntra);
		$criteria->compare('CAM_jugSale',$this->CAM_jugSale);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cambio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
