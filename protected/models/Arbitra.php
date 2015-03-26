<?php

/**
 * This is the model class for table "arbitra".
 *
 * The followings are the available columns in table 'arbitra':
 * @property string $ARBI_correl
 * @property string $ARBI_parCorrel
 * @property string $ARBI_arbCorrel
 * @property string $ARBI_tipo
 *
 * The followings are the available model relations:
 * @property Arbitro $aRBIArbCorrel
 * @property Partido $aRBIParCorrel
 */
class Arbitra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'arbitra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ARBI_parCorrel, ARBI_arbCorrel, ARBI_tipo', 'required'),
			array('ARBI_parCorrel, ARBI_arbCorrel, ARBI_tipo', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ARBI_correl, ARBI_parCorrel, ARBI_arbCorrel, ARBI_tipo', 'safe', 'on'=>'search'),
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
			'aRBIArbCorrel' => array(self::BELONGS_TO, 'Arbitro', 'ARBI_arbCorrel'),
			'aRBIParCorrel' => array(self::BELONGS_TO, 'Partido', 'ARBI_parCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARBI_correl' => 'Arbi Correl',
			'ARBI_parCorrel' => 'Arbi Par Correl',
			'ARBI_arbCorrel' => 'Arbi Arb Correl',
			'ARBI_tipo' => 'Arbi Tipo',
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

		$criteria->compare('ARBI_correl',$this->ARBI_correl,true);
		$criteria->compare('ARBI_parCorrel',$this->ARBI_parCorrel,true);
		$criteria->compare('ARBI_arbCorrel',$this->ARBI_arbCorrel,true);
		$criteria->compare('ARBI_tipo',$this->ARBI_tipo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Arbitra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
