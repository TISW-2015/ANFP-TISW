<?php

/**
 * This is the model class for table "sancionestadio".
 *
 * The followings are the available columns in table 'sancionestadio':
 * @property string $SAN_EST_correl
 * @property string $SAN_EST_estCorrel
 * @property string $SAN_EST_arbCorrel
 * @property string $SAN_EST_fecha
 * @property integer $SAN_EST_castigo
 *
 * The followings are the available model relations:
 * @property Arbitro $sANESTArbCorrel
 * @property Estadio $sANESTEstCorrel
 */
class Sancionestadio extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sancionestadio';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SAN_EST_estCorrel, SAN_EST_arbCorrel, SAN_EST_fecha', 'required'),
			array('SAN_EST_castigo', 'numerical', 'integerOnly'=>true),
			array('SAN_EST_estCorrel, SAN_EST_arbCorrel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SAN_EST_correl, SAN_EST_estCorrel, SAN_EST_arbCorrel, SAN_EST_fecha, SAN_EST_castigo', 'safe', 'on'=>'search'),
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
			'sANESTArbCorrel' => array(self::BELONGS_TO, 'Arbitro', 'SAN_EST_arbCorrel'),
			'sANESTEstCorrel' => array(self::BELONGS_TO, 'Estadio', 'SAN_EST_estCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SAN_EST_correl' => 'San Est Correl',
			'SAN_EST_estCorrel' => 'San Est Est Correl',
			'SAN_EST_arbCorrel' => 'San Est Arb Correl',
			'SAN_EST_fecha' => 'San Est Fecha',
			'SAN_EST_castigo' => 'San Est Castigo',
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

		$criteria->compare('SAN_EST_correl',$this->SAN_EST_correl,true);
		$criteria->compare('SAN_EST_estCorrel',$this->SAN_EST_estCorrel,true);
		$criteria->compare('SAN_EST_arbCorrel',$this->SAN_EST_arbCorrel,true);
		$criteria->compare('SAN_EST_fecha',$this->SAN_EST_fecha,true);
		$criteria->compare('SAN_EST_castigo',$this->SAN_EST_castigo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sancionestadio the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
