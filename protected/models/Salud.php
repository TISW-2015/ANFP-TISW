<?php

/**
 * This is the model class for table "salud".
 *
 * The followings are the available columns in table 'salud':
 * @property string $SALU_correl
 * @property integer $SALU_porcentaje
 * @property string $ISAPRE_ISA_correl
 *
 * The followings are the available model relations:
 * @property Salario[] $salarios
 * @property Isapre $iSAPREISACorrel
 */
class Salud extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'salud';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SALU_porcentaje', 'numerical', 'integerOnly'=>true),
			array('ISAPRE_ISA_correl', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SALU_correl, SALU_porcentaje, ISAPRE_ISA_correl', 'safe', 'on'=>'search'),
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
			'salarios' => array(self::HAS_MANY, 'Salario', 'SAL_saluCorrel'),
			'iSAPREISACorrel' => array(self::BELONGS_TO, 'Isapre', 'ISAPRE_ISA_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SALU_correl' => 'Salu Correl',
			'SALU_porcentaje' => 'Salu Porcentaje',
			'ISAPRE_ISA_correl' => 'Isapre Isa Correl',
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

		$criteria->compare('SALU_correl',$this->SALU_correl,true);
		$criteria->compare('SALU_porcentaje',$this->SALU_porcentaje);
		$criteria->compare('ISAPRE_ISA_correl',$this->ISAPRE_ISA_correl,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Salud the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
