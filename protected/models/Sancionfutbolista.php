<?php

/**
 * This is the model class for table "sancionfutbolista".
 *
 * The followings are the available columns in table 'sancionfutbolista':
 * @property string $SAN_FUT_correl
 * @property string $SAN_FUT_futCorrel
 * @property string $SAN_FUT_arbCorrel
 * @property string $SAN_FUT_fecha
 * @property string $SAN_FUT_descripcion
 * @property integer $SAN_FUT_castigo
 * @property integer $SAN_FUT_partidoPerdido
 *
 * The followings are the available model relations:
 * @property Arbitro $sANFUTArbCorrel
 * @property Futbolista $sANFUTFutCorrel
 */
class Sancionfutbolista extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sancionfutbolista';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('SAN_FUT_futCorrel, SAN_FUT_arbCorrel, SAN_FUT_fecha', 'required'),
			array('SAN_FUT_castigo, SAN_FUT_partidoPerdido', 'numerical', 'integerOnly'=>true),
			array('SAN_FUT_futCorrel, SAN_FUT_arbCorrel', 'length', 'max'=>10),
			array('SAN_FUT_descripcion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('SAN_FUT_correl, SAN_FUT_futCorrel, SAN_FUT_arbCorrel, SAN_FUT_fecha, SAN_FUT_descripcion, SAN_FUT_castigo, SAN_FUT_partidoPerdido', 'safe', 'on'=>'search'),
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
			'sANFUTArbCorrel' => array(self::BELONGS_TO, 'Arbitro', 'SAN_FUT_arbCorrel'),
			'sANFUTFutCorrel' => array(self::BELONGS_TO, 'Futbolista', 'SAN_FUT_futCorrel'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'SAN_FUT_correl' => 'San Fut Correl',
			'SAN_FUT_futCorrel' => 'San Fut Fut Correl',
			'SAN_FUT_arbCorrel' => 'San Fut Arb Correl',
			'SAN_FUT_fecha' => 'San Fut Fecha',
			'SAN_FUT_descripcion' => 'San Fut Descripcion',
			'SAN_FUT_castigo' => 'San Fut Castigo',
			'SAN_FUT_partidoPerdido' => 'San Fut Partido Perdido',
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

		$criteria->compare('SAN_FUT_correl',$this->SAN_FUT_correl,true);
		$criteria->compare('SAN_FUT_futCorrel',$this->SAN_FUT_futCorrel,true);
		$criteria->compare('SAN_FUT_arbCorrel',$this->SAN_FUT_arbCorrel,true);
		$criteria->compare('SAN_FUT_fecha',$this->SAN_FUT_fecha,true);
		$criteria->compare('SAN_FUT_descripcion',$this->SAN_FUT_descripcion,true);
		$criteria->compare('SAN_FUT_castigo',$this->SAN_FUT_castigo);
		$criteria->compare('SAN_FUT_partidoPerdido',$this->SAN_FUT_partidoPerdido);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Sancionfutbolista the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
