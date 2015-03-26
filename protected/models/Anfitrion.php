<?php

/**
 * This is the model class for table "anfitrion".
 *
 * The followings are the available columns in table 'anfitrion':
 * @property string $ANF_correl
 * @property string $ANF_equCorrel
 * @property string $ANF_estCorrel
 * @property string $ANF_prioridad
 * @property integer $ANF_agno
 * @property integer $ANF_periodo
 *
 * The followings are the available model relations:
 * @property Equipo $aNFEquCorrel
 * @property Estadio $aNFEstCorrel
 */
class Anfitrion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'anfitrion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ANF_equCorrel, ANF_estCorrel', 'required'),
			array('ANF_agno, ANF_periodo', 'numerical', 'integerOnly'=>true),
			array('ANF_equCorrel, ANF_estCorrel, ANF_prioridad', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ANF_correl, ANF_equCorrel, ANF_estCorrel, ANF_prioridad, ANF_agno, ANF_periodo', 'safe', 'on'=>'search'),
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
			'aNFEquCorrel' => array(self::BELONGS_TO, 'Equipo', 'ANF_equCorrel'),
			'aNFEstCorrel' => array(self::BELONGS_TO, 'Estadio', 'ANF_estCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ANF_correl' => 'Anf Correl',
			'ANF_equCorrel' => 'Anf Equ Correl',
			'ANF_estCorrel' => 'Anf Est Correl',
			'ANF_prioridad' => 'Anf Prioridad',
			'ANF_agno' => 'Anf Agno',
			'ANF_periodo' => 'Anf Periodo',
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

		$criteria->compare('ANF_correl',$this->ANF_correl,true);
		$criteria->compare('ANF_equCorrel',$this->ANF_equCorrel,true);
		$criteria->compare('ANF_estCorrel',$this->ANF_estCorrel,true);
		$criteria->compare('ANF_prioridad',$this->ANF_prioridad,true);
		$criteria->compare('ANF_agno',$this->ANF_agno);
		$criteria->compare('ANF_periodo',$this->ANF_periodo);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Anfitrion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
