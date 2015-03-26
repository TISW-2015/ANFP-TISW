<?php

/**
 * This is the model class for table "integra".
 *
 * The followings are the available columns in table 'integra':
 * @property string $INT_correl
 * @property string $INT_torCorrel
 * @property string $INT_equCorrel
 * @property integer $INT_puntaje
 * @property integer $INT_golesFavor
 * @property integer $INT_golesContra
 * @property integer $INT_golesDif
 * @property integer $INT_partidoGanado
 * @property integer $INT_partidoPerdido
 * @property integer $INT_partidoEmpatado
 * @property integer $INT_tarjetaRojas
 * @property integer $INT_tarjetaAmarilla
 *
 * The followings are the available model relations:
 * @property Equipo $iNTEquCorrel
 * @property Torneo $iNTTorCorrel
 */
class Integra extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'integra';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('INT_torCorrel, INT_equCorrel', 'required'),
			array('INT_puntaje, INT_golesFavor, INT_golesContra, INT_golesDif, INT_partidoGanado, INT_partidoPerdido, INT_partidoEmpatado, INT_tarjetaRojas, INT_tarjetaAmarilla', 'numerical', 'integerOnly'=>true),
			array('INT_torCorrel, INT_equCorrel', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('INT_correl, INT_torCorrel, INT_equCorrel, INT_puntaje, INT_golesFavor, INT_golesContra, INT_golesDif, INT_partidoGanado, INT_partidoPerdido, INT_partidoEmpatado, INT_tarjetaRojas, INT_tarjetaAmarilla', 'safe', 'on'=>'search'),
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
			'iNTEquCorrel' => array(self::BELONGS_TO, 'Equipo', 'INT_equCorrel'),
			'iNTTorCorrel' => array(self::BELONGS_TO, 'Torneo', 'INT_torCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'INT_correl' => 'Int Correl',
			'INT_torCorrel' => 'Int Tor Correl',
			'INT_equCorrel' => 'Int Equ Correl',
			'INT_puntaje' => 'Int Puntaje',
			'INT_golesFavor' => 'Int Goles Favor',
			'INT_golesContra' => 'Int Goles Contra',
			'INT_golesDif' => 'Int Goles Dif',
			'INT_partidoGanado' => 'Int Partido Ganado',
			'INT_partidoPerdido' => 'Int Partido Perdido',
			'INT_partidoEmpatado' => 'Int Partido Empatado',
			'INT_tarjetaRojas' => 'Int Tarjeta Rojas',
			'INT_tarjetaAmarilla' => 'Int Tarjeta Amarilla',
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

		$criteria->compare('INT_correl',$this->INT_correl,true);
		$criteria->compare('INT_torCorrel',$this->INT_torCorrel,true);
		$criteria->compare('INT_equCorrel',$this->INT_equCorrel,true);
		$criteria->compare('INT_puntaje',$this->INT_puntaje);
		$criteria->compare('INT_golesFavor',$this->INT_golesFavor);
		$criteria->compare('INT_golesContra',$this->INT_golesContra);
		$criteria->compare('INT_golesDif',$this->INT_golesDif);
		$criteria->compare('INT_partidoGanado',$this->INT_partidoGanado);
		$criteria->compare('INT_partidoPerdido',$this->INT_partidoPerdido);
		$criteria->compare('INT_partidoEmpatado',$this->INT_partidoEmpatado);
		$criteria->compare('INT_tarjetaRojas',$this->INT_tarjetaRojas);
		$criteria->compare('INT_tarjetaAmarilla',$this->INT_tarjetaAmarilla);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Integra the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
