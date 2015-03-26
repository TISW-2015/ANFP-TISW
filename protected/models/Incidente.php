<?php

/**
 * This is the model class for table "incidente".
 *
 * The followings are the available columns in table 'incidente':
 * @property string $INC_correl
 * @property string $INC_parCorrel
 * @property string $INC_arbCorrel
 * @property string $INC_descripcion
 * @property integer $INC_minuto
 * @property string $INC_fecha
 *
 * The followings are the available model relations:
 * @property Arbitro $iNCArbCorrel
 * @property Partido $iNCParCorrel
 */
class Incidente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'incidente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('INC_parCorrel, INC_arbCorrel', 'required'),
			array('INC_minuto', 'numerical', 'integerOnly'=>true),
			array('INC_parCorrel, INC_arbCorrel', 'length', 'max'=>10),
			array('INC_descripcion, INC_fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('INC_correl, INC_parCorrel, INC_arbCorrel, INC_descripcion, INC_minuto, INC_fecha', 'safe', 'on'=>'search'),
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
			'iNCArbCorrel' => array(self::BELONGS_TO, 'Arbitro', 'INC_arbCorrel'),
			'iNCParCorrel' => array(self::BELONGS_TO, 'Partido', 'INC_parCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'INC_correl' => 'Inc Correl',
			'INC_parCorrel' => 'Inc Par Correl',
			'INC_arbCorrel' => 'Inc Arb Correl',
			'INC_descripcion' => 'Inc Descripcion',
			'INC_minuto' => 'Inc Minuto',
			'INC_fecha' => 'Inc Fecha',
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

		$criteria->compare('INC_correl',$this->INC_correl,true);
		$criteria->compare('INC_parCorrel',$this->INC_parCorrel,true);
		$criteria->compare('INC_arbCorrel',$this->INC_arbCorrel,true);
		$criteria->compare('INC_descripcion',$this->INC_descripcion,true);
		$criteria->compare('INC_minuto',$this->INC_minuto);
		$criteria->compare('INC_fecha',$this->INC_fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Incidente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
