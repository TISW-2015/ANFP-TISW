<?php

/**
 * This is the model class for table "equipo".
 *
 * The followings are the available columns in table 'equipo':
 * @property string $EQU_correl
 * @property string $EQU_nombre
 * @property string $EQU_presidente
 * @property string $EQU_direccionClub
 * @property string $EQU_sitio
 * @property string $EQU_telefono
 * @property string $EQU_estado
 *
 * The followings are the available model relations:
 * @property Anfitrion[] $anfitrions
 * @property Contratojugador[] $contratojugadors
 * @property Contratotecnico[] $contratotecnicos
 * @property Formacion[] $formacions
 * @property Integra[] $integras
 * @property Logo[] $logos
 * @property Participa[] $participas
 * @property Pertenece[] $perteneces
 * @property Sancionequipo[] $sancionequipos
 */
class Equipo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'equipo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('EQU_nombre, EQU_presidente, EQU_direccionClub, EQU_sitio, EQU_telefono', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('EQU_correl, EQU_nombre, EQU_presidente, EQU_direccionClub, EQU_sitio, EQU_telefono,EQU_estado', 'safe', 'on'=>'search'),
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
			'anfitrions' => array(self::HAS_MANY, 'Anfitrion', 'ANF_equCorrel'),
			'contratojugadors' => array(self::HAS_MANY, 'Contratojugador', 'CON_JUG_equCorrel'),
			'contratotecnicos' => array(self::HAS_MANY, 'Contratotecnico', 'CON_TEC_equCorrel'),
			'formacions' => array(self::HAS_MANY, 'Formacion', 'FOR_equCorrel'),
			'integras' => array(self::HAS_MANY, 'Integra', 'INT_equCorrel'),
			'logos' => array(self::HAS_MANY, 'Logo', 'LOG_equCorrel'),
			'participas' => array(self::HAS_MANY, 'Participa', 'PART_equCorrel'),
			'perteneces' => array(self::HAS_MANY, 'Pertenece', 'PER_equCorrel'),
			'sancionequipos' => array(self::HAS_MANY, 'Sancionequipo', 'SAN_EQU_equCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'EQU_correl' => 'Correl',
			'EQU_nombre' => 'Nombre',
			'EQU_presidente' => 'Presidente',
			'EQU_direccionClub' => 'Direccion Club',
			'EQU_sitio' => 'Sitio',
			'EQU_telefono' => 'Telefono',
			'EQU_estado' => 'estado',
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

		$criteria->compare('EQU_correl',$this->EQU_correl,true);
		$criteria->compare('EQU_nombre',$this->EQU_nombre,true);
		$criteria->compare('EQU_presidente',$this->EQU_presidente,true);
		$criteria->compare('EQU_direccionClub',$this->EQU_direccionClub,true);
		$criteria->compare('EQU_sitio',$this->EQU_sitio,true);
		$criteria->compare('EQU_telefono',$this->EQU_telefono,true);
		$criteria->compare('EQU_estado',$this->EQU_estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Equipo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
}
