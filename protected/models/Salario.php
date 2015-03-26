<?php

/**
 * This is the model class for table "salario".
 *
 * The followings are the available columns in table 'salario':
 * @property integer $SAL_correl
 * @property string $SAL_afpCorrel
 * @property string $SAL_JUG_correl
 * @property string $SAL_TEC_correl
 * @property string $SAL_saluCorrel
 * @property string $SAL_fechaPaga
 * @property integer $SAL_monto
 * @property integer $SAL_salud
 * @property integer $SAL_prevision
 * @property integer $SAL_sueldoLiquido
 *
 * The followings are the available model relations:
 * @property Afp $sALAfpCorrel
 * @property Contratojugador $sALJUGCorrel
 * @property Contratotecnico $sALTECCorrel
 * @property Salud $sALSaluCorrel
 */
class Salario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SAL_correl, SAL_afpCorrel, SAL_saluCorrel', 'required'),
			array('SAL_correl, SAL_monto, SAL_salud, SAL_prevision, SAL_sueldoLiquido', 'numerical', 'integerOnly'=>true),
			array('SAL_afpCorrel, SAL_JUG_correl, SAL_TEC_correl, SAL_saluCorrel', 'length', 'max'=>10),
			array('SAL_fechaPaga', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SAL_correl, SAL_afpCorrel, SAL_JUG_correl, SAL_TEC_correl, SAL_saluCorrel, SAL_fechaPaga, SAL_monto, SAL_salud, SAL_prevision, SAL_sueldoLiquido', 'safe', 'on'=>'search'),
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
			'sALAfpCorrel' => array(self::BELONGS_TO, 'Afp', 'SAL_afpCorrel'),
			'sALJUGCorrel' => array(self::BELONGS_TO, 'Contratojugador', 'SAL_JUG_correl'),
			'sALTECCorrel' => array(self::BELONGS_TO, 'Contratotecnico', 'SAL_TEC_correl'),
			'sALSaluCorrel' => array(self::BELONGS_TO, 'Salud', 'SAL_saluCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SAL_correl' => 'Sal Correl',
			'SAL_afpCorrel' => 'Sal Afp Correl',
			'SAL_JUG_correl' => 'Sal Jug Correl',
			'SAL_TEC_correl' => 'Sal Tec Correl',
			'SAL_saluCorrel' => 'Sal Salu Correl',
			'SAL_fechaPaga' => 'Sal Fecha Paga',
			'SAL_monto' => 'Sal Monto',
			'SAL_salud' => 'Sal Salud',
			'SAL_prevision' => 'Sal Prevision',
			'SAL_sueldoLiquido' => 'Sal Sueldo Liquido',
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

		$criteria->compare('SAL_correl',$this->SAL_correl);
		$criteria->compare('SAL_afpCorrel',$this->SAL_afpCorrel,true);
		$criteria->compare('SAL_JUG_correl',$this->SAL_JUG_correl,true);
		$criteria->compare('SAL_TEC_correl',$this->SAL_TEC_correl,true);
		$criteria->compare('SAL_saluCorrel',$this->SAL_saluCorrel,true);
		$criteria->compare('SAL_fechaPaga',$this->SAL_fechaPaga,true);
		$criteria->compare('SAL_monto',$this->SAL_monto);
		$criteria->compare('SAL_salud',$this->SAL_salud);
		$criteria->compare('SAL_prevision',$this->SAL_prevision);
		$criteria->compare('SAL_sueldoLiquido',$this->SAL_sueldoLiquido);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
