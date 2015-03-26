<?php

/**
 * This is the model class for table "juega".
 *
 * The followings are the available columns in table 'juega':
 * @property string $JUE_correl
 * @property string $JUE_futCorrel
 * @property string $JUE_forCorrel
 * @property string $JUE_posCorrel
 *
 * The followings are the available model relations:
 * @property Formacion $jUEForCorrel
 * @property Futbolista $jUEFutCorrel
 * @property Posicion $jUEPosCorrel
 */
class Juega extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'juega';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('JUE_posCorrel', 'required'),
			array('JUE_futCorrel, JUE_forCorrel, JUE_posCorrel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('JUE_correl, JUE_futCorrel, JUE_forCorrel, JUE_posCorrel', 'safe', 'on'=>'search'),
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
			'jUEForCorrel' => array(self::BELONGS_TO, 'Formacion', 'JUE_forCorrel'),
			'jUEFutCorrel' => array(self::BELONGS_TO, 'Futbolista', 'JUE_futCorrel'),
			'jUEPosCorrel' => array(self::BELONGS_TO, 'Posicion', 'JUE_posCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'JUE_correl' => 'Jue Correl',
			'JUE_futCorrel' => 'Jue Fut Correl',
			'JUE_forCorrel' => 'Jue For Correl',
			'JUE_posCorrel' => 'Jue Pos Correl',
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

		$criteria->compare('JUE_correl',$this->JUE_correl,true);
		$criteria->compare('JUE_futCorrel',$this->JUE_futCorrel,true);
		$criteria->compare('JUE_forCorrel',$this->JUE_forCorrel,true);
		$criteria->compare('JUE_posCorrel',$this->JUE_posCorrel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Juega the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
