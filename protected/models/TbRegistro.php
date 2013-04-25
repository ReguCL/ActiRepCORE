<?php

/**
 * This is the model class for table "tb_registro".
 *
 * The followings are the available columns in table 'tb_registro':
 * @property integer $ID_REGISTRO
 * @property string $FECHA
 * @property integer $HORAS
 * @property integer $TB_TAREA_ID_TAREA
 * @property integer $TB_ENTREGABLE_ID_ENTREGABLE
 * @property integer $TB_USUARIO_ID_USUARIO
 *
 * The followings are the available model relations:
 * @property TbTarea $tBTAREAIDTAREA
 * @property TbEntregable $tBENTREGABLEIDENTREGABLE
 * @property TbUsuario $tBUSUARIOIDUSUARIO
 */
class TbRegistro extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbRegistro the static model class
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
		return 'tb_registro';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_REGISTRO, FECHA, TB_TAREA_ID_TAREA, TB_ENTREGABLE_ID_ENTREGABLE, TB_USUARIO_ID_USUARIO', 'required'),
			array('ID_REGISTRO, HORAS, TB_TAREA_ID_TAREA, TB_ENTREGABLE_ID_ENTREGABLE, TB_USUARIO_ID_USUARIO', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_REGISTRO, FECHA, HORAS, TB_TAREA_ID_TAREA, TB_ENTREGABLE_ID_ENTREGABLE, TB_USUARIO_ID_USUARIO', 'safe', 'on'=>'search'),
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
			'tBTAREAIDTAREA' => array(self::BELONGS_TO, 'TbTarea', 'TB_TAREA_ID_TAREA'),
			'tBENTREGABLEIDENTREGABLE' => array(self::BELONGS_TO, 'TbEntregable', 'TB_ENTREGABLE_ID_ENTREGABLE'),
			'tBUSUARIOIDUSUARIO' => array(self::BELONGS_TO, 'TbUsuario', 'TB_USUARIO_ID_USUARIO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_REGISTRO' => 'Id Registro',
			'FECHA' => 'Fecha',
			'HORAS' => 'Horas',
			'TB_TAREA_ID_TAREA' => 'Tb Tarea Id Tarea',
			'TB_ENTREGABLE_ID_ENTREGABLE' => 'Tb Entregable Id Entregable',
			'TB_USUARIO_ID_USUARIO' => 'Tb Usuario Id Usuario',
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

		$criteria->compare('ID_REGISTRO',$this->ID_REGISTRO);
		$criteria->compare('FECHA',$this->FECHA,true);
		$criteria->compare('HORAS',$this->HORAS);
		$criteria->compare('TB_TAREA_ID_TAREA',$this->TB_TAREA_ID_TAREA);
		$criteria->compare('TB_ENTREGABLE_ID_ENTREGABLE',$this->TB_ENTREGABLE_ID_ENTREGABLE);
		$criteria->compare('TB_USUARIO_ID_USUARIO',$this->TB_USUARIO_ID_USUARIO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}