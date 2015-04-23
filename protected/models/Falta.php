<?php

/**
 * This is the model class for table "falta".
 *
 * The followings are the available columns in table 'falta':
 * @property string $FAL_correl
 * @property string $FAL_castigo
 * @property string $FAL_minuto
 * @property string $FAL_futCorrel
 * @property string $FAL_parCorrel
 * @property string $FAL_arbCorrel
 *
 * The followings are the available model relations:
 * @property Arbitro $fALArbCorrel
 * @property Futbolista $fALFutCorrel
 * @property Partido $fALParCorrel
 */
class Falta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'falta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FAL_futCorrel, FAL_parCorrel, FAL_arbCorrel', 'required'),
			array('FAL_castigo, FAL_minuto', 'length', 'max'=>45),
			array('FAL_futCorrel, FAL_parCorrel, FAL_arbCorrel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FAL_correl, FAL_castigo, FAL_minuto, FAL_futCorrel, FAL_parCorrel, FAL_arbCorrel', 'safe', 'on'=>'search'),
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
			'fALArbCorrel' => array(self::BELONGS_TO, 'Arbitro', 'FAL_arbCorrel'),
			'fALFutCorrel' => array(self::BELONGS_TO, 'Futbolista', 'FAL_futCorrel'),
			'fALParCorrel' => array(self::BELONGS_TO, 'Partido', 'FAL_parCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FAL_correl' => 'Falta',
			'FAL_castigo' => 'Castigo',
			'FAL_minuto' => 'Minuto Falta',
			'FAL_futCorrel' => 'Futbolista',
			'FAL_parCorrel' => 'Partido',
			'FAL_arbCorrel' => 'Arbitro',
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

		$criteria->compare('FAL_correl',$this->FAL_correl,true);
		$criteria->compare('FAL_castigo',$this->FAL_castigo,true);
		$criteria->compare('FAL_minuto',$this->FAL_minuto,true);
		$criteria->compare('FAL_futCorrel',$this->FAL_futCorrel,true);
		$criteria->compare('FAL_parCorrel',$this->FAL_parCorrel,true);
		$criteria->compare('FAL_arbCorrel',$this->FAL_arbCorrel,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Falta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
