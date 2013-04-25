<?php

/**
 * This is the model class for table "tb_tarea".
 *
 * The followings are the available columns in table 'tb_tarea':
 * @property integer $ID_TAREA
 * @property string $REFERENCIA
 * @property string $DESCRIPCION
 * @property integer $TB_PROYECTO_ID_PROYECTO
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property TbPlanificacion[] $tbPlanificacions
 * @property TbRegistro[] $tbRegistros
 * @property TbProyecto $tBPROYECTOIDPROYECTO
 */
class TbTarea extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbTarea the static model class
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
		return 'tb_tarea';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_TAREA, REFERENCIA, TB_PROYECTO_ID_PROYECTO, ESTADO', 'required'),
			array('ID_TAREA, TB_PROYECTO_ID_PROYECTO', 'numerical', 'integerOnly'=>true),
			array('REFERENCIA, DESCRIPCION, ESTADO', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_TAREA, REFERENCIA, DESCRIPCION, TB_PROYECTO_ID_PROYECTO, ESTADO', 'safe', 'on'=>'search'),
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
			'tbPlanificacions' => array(self::HAS_MANY, 'TbPlanificacion', 'TB_TAREA_ID_TAREA'),
			'tbRegistros' => array(self::HAS_MANY, 'TbRegistro', 'TB_TAREA_ID_TAREA'),
			'tBPROYECTOIDPROYECTO' => array(self::BELONGS_TO, 'TbProyecto', 'TB_PROYECTO_ID_PROYECTO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_TAREA' => 'Id Tarea',
			'REFERENCIA' => 'Referencia',
			'DESCRIPCION' => 'Descripcion',
			'TB_PROYECTO_ID_PROYECTO' => 'Tb Proyecto Id Proyecto',
			'ESTADO' => 'Estado',
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

		$criteria->compare('ID_TAREA',$this->ID_TAREA);
		$criteria->compare('REFERENCIA',$this->REFERENCIA,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('TB_PROYECTO_ID_PROYECTO',$this->TB_PROYECTO_ID_PROYECTO);
		$criteria->compare('ESTADO',$this->ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}