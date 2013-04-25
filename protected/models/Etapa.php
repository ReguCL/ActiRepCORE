<?php

/**
 * This is the model class for table "etapa".
 *
 * The followings are the available columns in table 'etapa':
 * @property integer $ID_ETAPA
 * @property string $REFERENCIA
 * @property string $DESCRIPCION
 *
 * The followings are the available model relations:
 * @property TbEntregable[] $tbEntregables
 */
class Etapa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Etapa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'etapa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_ETAPA, REFERENCIA', 'required'),
			array('ID_ETAPA', 'numerical', 'integerOnly'=>true),
			array('REFERENCIA, DESCRIPCION', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_ETAPA, REFERENCIA, DESCRIPCION', 'safe', 'on'=>'search'),
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
			'tbEntregables' => array(self::HAS_MANY, 'TbEntregable', 'ETAPA_ID_ETAPA'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_ETAPA' => 'Id Etapa',
			'REFERENCIA' => 'Referencia',
			'DESCRIPCION' => 'Descripcion',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ID_ETAPA',$this->ID_ETAPA);
		$criteria->compare('REFERENCIA',$this->REFERENCIA,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}