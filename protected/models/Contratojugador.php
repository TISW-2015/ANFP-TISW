<?php

/**
 * This is the model class for table "contratojugador".
 *
 * The followings are the available columns in table 'contratojugador':
 * @property string $CON_JUG_correl
 * @property string $CON_JUG_equCorrel
 * @property integer $CON_JUG_agno
 * @property integer $CON_JUG_periodo
 * @property string $CON_JUG_futCorrel
 * @property integer $CON_JUG_numero
 * @property integer $CON_JUG_amarilla
 * @property integer $CON_JUG_roja
 * @property integer $CON_JUG_goles
 * @property integer $CON_JUG_asistencia
 * @property integer $CON_JUG_falta
 *
 * The followings are the available model relations:
 * @property Equipo $cONJUGEquCorrel
 * @property Futbolista $cONJUGFutCorrel
 * @property Salario[] $salarios
 */
class Contratojugador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contratojugador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('CON_JUG_equCorrel', 'required'),
			array('CON_JUG_agno, CON_JUG_periodo, CON_JUG_numero, CON_JUG_amarilla, CON_JUG_roja, CON_JUG_goles, CON_JUG_asistencia, CON_JUG_falta', 'numerical', 'integerOnly'=>true),
			array('CON_JUG_equCorrel, CON_JUG_futCorrel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CON_JUG_correl, CON_JUG_equCorrel, CON_JUG_agno, CON_JUG_periodo, CON_JUG_futCorrel, CON_JUG_numero, CON_JUG_amarilla, CON_JUG_roja, CON_JUG_goles, CON_JUG_asistencia, CON_JUG_falta', 'safe', 'on'=>'search'),
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
			'cONJUGEquCorrel' => array(self::BELONGS_TO, 'Equipo', 'CON_JUG_equCorrel'),
			'cONJUGFutCorrel' => array(self::BELONGS_TO, 'Futbolista', 'CON_JUG_futCorrel'),
			'salarios' => array(self::HAS_MANY, 'Salario', 'SAL_JUG_correl'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CON_JUG_correl' => 'Con Jug Correl',
			'CON_JUG_equCorrel' => 'Con Jug Equ Correl',
			'CON_JUG_agno' => 'Con Jug Agno',
			'CON_JUG_periodo' => 'Con Jug Periodo',
			'CON_JUG_futCorrel' => 'Con Jug Fut Correl',
			'CON_JUG_numero' => 'Con Jug Numero',
			'CON_JUG_amarilla' => 'Con Jug Amarilla',
			'CON_JUG_roja' => 'Con Jug Roja',
			'CON_JUG_goles' => 'Con Jug Goles',
			'CON_JUG_asistencia' => 'Con Jug Asistencia',
			'CON_JUG_falta' => 'Con Jug Falta',
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

		$criteria->compare('CON_JUG_correl',$this->CON_JUG_correl,true);
		$criteria->compare('CON_JUG_equCorrel',$this->CON_JUG_equCorrel,true);
		$criteria->compare('CON_JUG_agno',$this->CON_JUG_agno);
		$criteria->compare('CON_JUG_periodo',$this->CON_JUG_periodo);
		$criteria->compare('CON_JUG_futCorrel',$this->CON_JUG_futCorrel,true);
		$criteria->compare('CON_JUG_numero',$this->CON_JUG_numero);
		$criteria->compare('CON_JUG_amarilla',$this->CON_JUG_amarilla);
		$criteria->compare('CON_JUG_roja',$this->CON_JUG_roja);
		$criteria->compare('CON_JUG_goles',$this->CON_JUG_goles);
		$criteria->compare('CON_JUG_asistencia',$this->CON_JUG_asistencia);
		$criteria->compare('CON_JUG_falta',$this->CON_JUG_falta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contratojugador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
