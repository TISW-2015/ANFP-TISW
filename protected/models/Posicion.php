<?php

/**
 * This is the model class for table "posicion".
 *
 * The followings are the available columns in table 'posicion':
 * @property string $POS_correl
 * @property string $POS_nombre
 * @property string $POS_codigo
 *
 * The followings are the available model relations:
 * @property Juega[] $juegas
 */
class Posicion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'posicion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('POS_nombre', 'length', 'max'=>45),
			array('POS_codigo', 'length', 'max'=>3),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('POS_correl, POS_nombre, POS_codigo', 'safe', 'on'=>'search'),
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
			'juegas' => array(self::HAS_MANY, 'Juega', 'JUE_posCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'POS_correl' => 'Pos Correl',
			'POS_nombre' => 'Pos Nombre',
			'POS_codigo' => 'Pos Codigo',
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

		$criteria->compare('POS_correl',$this->POS_correl,true);
		$criteria->compare('POS_nombre',$this->POS_nombre,true);
		$criteria->compare('POS_codigo',$this->POS_codigo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Posicion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
