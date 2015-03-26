<?php

/**
 * This is the model class for table "arbitro".
 *
 * The followings are the available columns in table 'arbitro':
 * @property string $ARB_correl
 * @property string $ARB_nombre
 * @property string $ARB_apellidoPat
 * @property string $ARB_apellidoMat
 * @property string $ARB_fechaNac
 * @property string $ARB_nacionalidad
 *
 * The followings are the available model relations:
 * @property Arbitra[] $arbitras
 * @property Falta[] $faltas
 * @property Incidente[] $incidentes
 * @property Sancionequipo[] $sancionequipos
 * @property Sancionestadio[] $sancionestadios
 * @property Sancionfutbolista[] $sancionfutbolistas
 * @property Sanciontecnico[] $sanciontecnicos
 */
class Arbitro extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'arbitro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ARB_nombre, ARB_apellidoPat, ARB_apellidoMat, ARB_nacionalidad', 'length', 'max'=>45),
			array('ARB_fechaNac', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ARB_correl, ARB_nombre, ARB_apellidoPat, ARB_apellidoMat, ARB_fechaNac, ARB_nacionalidad', 'safe', 'on'=>'search'),
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
			'arbitras' => array(self::HAS_MANY, 'Arbitra', 'ARBI_arbCorrel'),
			'faltas' => array(self::HAS_MANY, 'Falta', 'FAL_arbCorrel'),
			'incidentes' => array(self::HAS_MANY, 'Incidente', 'INC_arbCorrel'),
			'sancionequipos' => array(self::HAS_MANY, 'Sancionequipo', 'SAN_EQU_arbCorrel'),
			'sancionestadios' => array(self::HAS_MANY, 'Sancionestadio', 'SAN_EST_arbCorrel'),
			'sancionfutbolistas' => array(self::HAS_MANY, 'Sancionfutbolista', 'SAN_FUT_arbCorrel'),
			'sanciontecnicos' => array(self::HAS_MANY, 'Sanciontecnico', 'SAN_TEC_arbCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARB_correl' => 'Arb Correl',
			'ARB_nombre' => 'Arb Nombre',
			'ARB_apellidoPat' => 'Arb Apellido Pat',
			'ARB_apellidoMat' => 'Arb Apellido Mat',
			'ARB_fechaNac' => 'Arb Fecha Nac',
			'ARB_nacionalidad' => 'Arb Nacionalidad',
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

		$criteria->compare('ARB_correl',$this->ARB_correl,true);
		$criteria->compare('ARB_nombre',$this->ARB_nombre,true);
		$criteria->compare('ARB_apellidoPat',$this->ARB_apellidoPat,true);
		$criteria->compare('ARB_apellidoMat',$this->ARB_apellidoMat,true);
		$criteria->compare('ARB_fechaNac',$this->ARB_fechaNac,true);
		$criteria->compare('ARB_nacionalidad',$this->ARB_nacionalidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Arbitro the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
