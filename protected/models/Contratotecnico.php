<?php

/**
 * This is the model class for table "contratotecnico".
 *
 * The followings are the available columns in table 'contratotecnico':
 * @property string $CON_TEC_correl
 * @property string $CON_TEC_tecCorrel
 * @property string $CON_TEC_equCorrel
 * @property integer $CON_TEC_agno
 * @property integer $CON_TEC_periodo
 * @property string $CON_TEC_cargo
 *
 * The followings are the available model relations:
 * @property Equipo $cONTECEquCorrel
 * @property Tecnico $cONTECTecCorrel
 * @property Salario[] $salarios
 */
class Contratotecnico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contratotecnico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CON_TEC_tecCorrel, CON_TEC_equCorrel', 'required'),
			array('CON_TEC_agno, CON_TEC_periodo', 'numerical', 'integerOnly'=>true),
			array('CON_TEC_tecCorrel, CON_TEC_equCorrel', 'length', 'max'=>10),
			array('CON_TEC_cargo', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CON_TEC_correl, CON_TEC_tecCorrel, CON_TEC_equCorrel, CON_TEC_agno, CON_TEC_periodo, CON_TEC_cargo', 'safe', 'on'=>'search'),
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
			'cONTECEquCorrel' => array(self::BELONGS_TO, 'Equipo', 'CON_TEC_equCorrel'),
			'cONTECTecCorrel' => array(self::BELONGS_TO, 'Tecnico', 'CON_TEC_tecCorrel'),
			'salarios' => array(self::HAS_MANY, 'Salario', 'SAL_TEC_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CON_TEC_correl' => 'Con Tec Correl',
			'CON_TEC_tecCorrel' => 'Con Tec Tec Correl',
			'CON_TEC_equCorrel' => 'Con Tec Equ Correl',
			'CON_TEC_agno' => 'Con Tec Agno',
			'CON_TEC_periodo' => 'Con Tec Periodo',
			'CON_TEC_cargo' => 'Con Tec Cargo',
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

		$criteria->compare('CON_TEC_correl',$this->CON_TEC_correl,true);
		$criteria->compare('CON_TEC_tecCorrel',$this->CON_TEC_tecCorrel,true);
		$criteria->compare('CON_TEC_equCorrel',$this->CON_TEC_equCorrel,true);
		$criteria->compare('CON_TEC_agno',$this->CON_TEC_agno);
		$criteria->compare('CON_TEC_periodo',$this->CON_TEC_periodo);
		$criteria->compare('CON_TEC_cargo',$this->CON_TEC_cargo,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contratotecnico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
