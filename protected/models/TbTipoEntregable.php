<?php

/**
 * This is the model class for table "tb_tipo_entregable".
 *
 * The followings are the available columns in table 'tb_tipo_entregable':
 * @property integer $ID_TIPO_ENTREGABLE
 * @property string $REFERENCIA
 * @property string $DESCRIPCION
 *
 * The followings are the available model relations:
 * @property TbEntregable[] $tbEntregables
 */
class TbTipoEntregable extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbTipoEntregable the static model class
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
		return 'tb_tipo_entregable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_TIPO_ENTREGABLE, REFERENCIA', 'required'),
			array('ID_TIPO_ENTREGABLE', 'numerical', 'integerOnly'=>true),
			array('REFERENCIA, DESCRIPCION', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_TIPO_ENTREGABLE, REFERENCIA, DESCRIPCION', 'safe', 'on'=>'search'),
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
			'tbEntregables' => array(self::HAS_MANY, 'TbEntregable', 'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_TIPO_ENTREGABLE' => 'Id Tipo Entregable',
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

		$criteria->compare('ID_TIPO_ENTREGABLE',$this->ID_TIPO_ENTREGABLE);
		$criteria->compare('REFERENCIA',$this->REFERENCIA,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}