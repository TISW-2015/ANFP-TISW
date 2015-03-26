<?php

/**
 * This is the model class for table "sanciontecnico".
 *
 * The followings are the available columns in table 'sanciontecnico':
 * @property string $SAN_TEC_correl
 * @property string $SAN_TEC_arbCorrel
 * @property string $SAN_TEC_tecCorrel
 * @property string $SAN_TEC_fecha
 * @property integer $SAN_TEC_castigo
 * @property integer $SAN_TEC_partidoPerido
 * @property string $SAN_TEC_descripcion
 *
 * The followings are the available model relations:
 * @property Arbitro $sANTECArbCorrel
 * @property Tecnico $sANTECTecCorrel
 */
class Sanciontecnico extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sanciontecnico';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SAN_TEC_arbCorrel, SAN_TEC_tecCorrel, SAN_TEC_fecha', 'required'),
			array('SAN_TEC_castigo, SAN_TEC_partidoPerido', 'numerical', 'integerOnly'=>true),
			array('SAN_TEC_arbCorrel, SAN_TEC_tecCorrel', 'length', 'max'=>10),
			array('SAN_TEC_descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SAN_TEC_correl, SAN_TEC_arbCorrel, SAN_TEC_tecCorrel, SAN_TEC_fecha, SAN_TEC_castigo, SAN_TEC_partidoPerido, SAN_TEC_descripcion', 'safe', 'on'=>'search'),
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
			'sANTECArbCorrel' => array(self::BELONGS_TO, 'Arbitro', 'SAN_TEC_arbCorrel'),
			'sANTECTecCorrel' => array(self::BELONGS_TO, 'Tecnico', 'SAN_TEC_tecCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SAN_TEC_correl' => 'San Tec Correl',
			'SAN_TEC_arbCorrel' => 'San Tec Arb Correl',
			'SAN_TEC_tecCorrel' => 'San Tec Tec Correl',
			'SAN_TEC_fecha' => 'San Tec Fecha',
			'SAN_TEC_castigo' => 'San Tec Castigo',
			'SAN_TEC_partidoPerido' => 'San Tec Partido Perido',
			'SAN_TEC_descripcion' => 'San Tec Descripcion',
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

		$criteria->compare('SAN_TEC_correl',$this->SAN_TEC_correl,true);
		$criteria->compare('SAN_TEC_arbCorrel',$this->SAN_TEC_arbCorrel,true);
		$criteria->compare('SAN_TEC_tecCorrel',$this->SAN_TEC_tecCorrel,true);
		$criteria->compare('SAN_TEC_fecha',$this->SAN_TEC_fecha,true);
		$criteria->compare('SAN_TEC_castigo',$this->SAN_TEC_castigo);
		$criteria->compare('SAN_TEC_partidoPerido',$this->SAN_TEC_partidoPerido);
		$criteria->compare('SAN_TEC_descripcion',$this->SAN_TEC_descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sanciontecnico the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
