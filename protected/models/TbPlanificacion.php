<?php

/**
 * This is the model class for table "tb_planificacion".
 *
 * The followings are the available columns in table 'tb_planificacion':
 * @property integer $ID_ENTREGABLE
 * @property string $FEC_INICIO
 * @property string $FEC_FIN
 * @property integer $HORAS
 * @property integer $TB_USUARIO_ID_USUARIO
 * @property integer $TB_TAREA_ID_TAREA
 * @property integer $TB_ENTREGABLE_ID_ENTREGABLE
 *
 * The followings are the available model relations:
 * @property TbUsuario $tBUSUARIOIDUSUARIO
 * @property TbTarea $tBTAREAIDTAREA
 * @property TbEntregable $tBENTREGABLEIDENTREGABLE
 */
class TbPlanificacion extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbPlanificacion the static model class
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
		return 'tb_planificacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_ENTREGABLE, FEC_INICIO, TB_USUARIO_ID_USUARIO, TB_TAREA_ID_TAREA, TB_ENTREGABLE_ID_ENTREGABLE', 'required'),
			array('ID_ENTREGABLE, HORAS, TB_USUARIO_ID_USUARIO, TB_TAREA_ID_TAREA, TB_ENTREGABLE_ID_ENTREGABLE', 'numerical', 'integerOnly'=>true),
			array('FEC_FIN', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_ENTREGABLE, FEC_INICIO, FEC_FIN, HORAS, TB_USUARIO_ID_USUARIO, TB_TAREA_ID_TAREA, TB_ENTREGABLE_ID_ENTREGABLE', 'safe', 'on'=>'search'),
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
			'tBUSUARIOIDUSUARIO' => array(self::BELONGS_TO, 'TbUsuario', 'TB_USUARIO_ID_USUARIO'),
			'tBTAREAIDTAREA' => array(self::BELONGS_TO, 'TbTarea', 'TB_TAREA_ID_TAREA'),
			'tBENTREGABLEIDENTREGABLE' => array(self::BELONGS_TO, 'TbEntregable', 'TB_ENTREGABLE_ID_ENTREGABLE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_ENTREGABLE' => 'Id Entregable',
			'FEC_INICIO' => 'Fec Inicio',
			'FEC_FIN' => 'Fec Fin',
			'HORAS' => 'Horas',
			'TB_USUARIO_ID_USUARIO' => 'Tb Usuario Id Usuario',
			'TB_TAREA_ID_TAREA' => 'Tb Tarea Id Tarea',
			'TB_ENTREGABLE_ID_ENTREGABLE' => 'Tb Entregable Id Entregable',
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

		$criteria->compare('ID_ENTREGABLE',$this->ID_ENTREGABLE);
		$criteria->compare('FEC_INICIO',$this->FEC_INICIO,true);
		$criteria->compare('FEC_FIN',$this->FEC_FIN,true);
		$criteria->compare('HORAS',$this->HORAS);
		$criteria->compare('TB_USUARIO_ID_USUARIO',$this->TB_USUARIO_ID_USUARIO);
		$criteria->compare('TB_TAREA_ID_TAREA',$this->TB_TAREA_ID_TAREA);
		$criteria->compare('TB_ENTREGABLE_ID_ENTREGABLE',$this->TB_ENTREGABLE_ID_ENTREGABLE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}