<?php

/**
 * This is the model class for table "formacion".
 *
 * The followings are the available columns in table 'formacion':
 * @property string $FOR_correl
 * @property string $FOR_asignacion
 * @property string $FOR_equCorrel
 * @property string $FOR_parCorrel
 * @property string $FORMACIONcol
 *
 * The followings are the available model relations:
 * @property Equipo $fOREquCorrel
 * @property Partido $fORParCorrel
 * @property Juega[] $juegas
 */
class Formacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'formacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('FOR_equCorrel, FOR_parCorrel', 'required'),
			array('FOR_asignacion, FORMACIONcol', 'length', 'max'=>45),
			array('FOR_equCorrel, FOR_parCorrel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('FOR_correl, FOR_asignacion, FOR_equCorrel, FOR_parCorrel, FORMACIONcol', 'safe', 'on'=>'search'),
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
			'fOREquCorrel' => array(self::BELONGS_TO, 'Equipo', 'FOR_equCorrel'),
			'fORParCorrel' => array(self::BELONGS_TO, 'Partido', 'FOR_parCorrel'),
			'juegas' => array(self::HAS_MANY, 'Juega', 'JUE_forCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'FOR_correl' => 'For Correl',
			'FOR_asignacion' => 'For Asignacion',
			'FOR_equCorrel' => 'For Equ Correl',
			'FOR_parCorrel' => 'For Par Correl',
			'FORMACIONcol' => 'Formacioncol',
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

		$criteria->compare('FOR_correl',$this->FOR_correl,true);
		$criteria->compare('FOR_asignacion',$this->FOR_asignacion,true);
		$criteria->compare('FOR_equCorrel',$this->FOR_equCorrel,true);
		$criteria->compare('FOR_parCorrel',$this->FOR_parCorrel,true);
		$criteria->compare('FORMACIONcol',$this->FORMACIONcol,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Formacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
