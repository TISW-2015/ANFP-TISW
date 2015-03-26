<?php

/**
 * This is the model class for table "sancionequipo".
 *
 * The followings are the available columns in table 'sancionequipo':
 * @property string $SAN_EQU_correl
 * @property string $SAN_EQU_equCorrel
 * @property string $SAN_EQU_arbCorrel
 * @property string $SAN_EQU_motivo
 * @property string $SAN_EQU_descripcion
 * @property integer $SAN_EQU_castigoMonto
 * @property string $SAN_EQU_fecha
 *
 * The followings are the available model relations:
 * @property Arbitro $sANEQUArbCorrel
 * @property Equipo $sANEQUEquCorrel
 */
class Sancionequipo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sancionequipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SAN_EQU_equCorrel, SAN_EQU_arbCorrel, SAN_EQU_fecha', 'required'),
			array('SAN_EQU_castigoMonto', 'numerical', 'integerOnly'=>true),
			array('SAN_EQU_equCorrel, SAN_EQU_arbCorrel', 'length', 'max'=>10),
			array('SAN_EQU_motivo, SAN_EQU_descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SAN_EQU_correl, SAN_EQU_equCorrel, SAN_EQU_arbCorrel, SAN_EQU_motivo, SAN_EQU_descripcion, SAN_EQU_castigoMonto, SAN_EQU_fecha', 'safe', 'on'=>'search'),
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
			'sANEQUArbCorrel' => array(self::BELONGS_TO, 'Arbitro', 'SAN_EQU_arbCorrel'),
			'sANEQUEquCorrel' => array(self::BELONGS_TO, 'Equipo', 'SAN_EQU_equCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SAN_EQU_correl' => 'San Equ Correl',
			'SAN_EQU_equCorrel' => 'San Equ Equ Correl',
			'SAN_EQU_arbCorrel' => 'San Equ Arb Correl',
			'SAN_EQU_motivo' => 'San Equ Motivo',
			'SAN_EQU_descripcion' => 'San Equ Descripcion',
			'SAN_EQU_castigoMonto' => 'San Equ Castigo Monto',
			'SAN_EQU_fecha' => 'San Equ Fecha',
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

		$criteria->compare('SAN_EQU_correl',$this->SAN_EQU_correl,true);
		$criteria->compare('SAN_EQU_equCorrel',$this->SAN_EQU_equCorrel,true);
		$criteria->compare('SAN_EQU_arbCorrel',$this->SAN_EQU_arbCorrel,true);
		$criteria->compare('SAN_EQU_motivo',$this->SAN_EQU_motivo,true);
		$criteria->compare('SAN_EQU_descripcion',$this->SAN_EQU_descripcion,true);
		$criteria->compare('SAN_EQU_castigoMonto',$this->SAN_EQU_castigoMonto);
		$criteria->compare('SAN_EQU_fecha',$this->SAN_EQU_fecha,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sancionequipo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
