<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $USU_correl
 * @property string $USU_role
 * @property string $USU_nombre
 * @property string $USU_clave
 * @property string $USU_email
 * @property string $USU_telefono
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USU_role, USU_nombre, USU_clave, USU_email, USU_telefono', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USU_correl, USU_role, USU_nombre, USU_clave, USU_email, USU_telefono', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USU_correl' => 'Usu Correl',
			'USU_role' => 'Usu Role',
			'USU_nombre' => 'Usu Nombre',
			'USU_clave' => 'Usu Clave',
			'USU_email' => 'Usu Email',
			'USU_telefono' => 'Usu Telefono',
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

		$criteria->compare('USU_correl',$this->USU_correl,true);
		$criteria->compare('USU_role',$this->USU_role,true);
		$criteria->compare('USU_nombre',$this->USU_nombre,true);
		$criteria->compare('USU_clave',$this->USU_clave,true);
		$criteria->compare('USU_email',$this->USU_email,true);
		$criteria->compare('USU_telefono',$this->USU_telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
