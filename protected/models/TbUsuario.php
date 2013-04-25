<?php

/**
 * This is the model class for table "tb_usuario".
 *
 * The followings are the available columns in table 'tb_usuario':
 * @property integer $ID_USUARIO
 * @property string $REFERENCIA
 * @property integer $COSTO
 * @property string $ASIGNACION
 * @property string $CONTRASENA
 * @property string $NIVELACCESO
 * @property string $ESTADO
 * @property string $NICK
 * @property integer $TB_ROLES_ID_ROLES
 * @property integer $TB_UNIDAD_ID_UNIDAD
 *
 * The followings are the available model relations:
 * @property TbPlanificacion[] $tbPlanificacions
 * @property TbProyecto[] $tbProyectos
 * @property TbRegistro[] $tbRegistros
 * @property TbRoles $tBROLESIDROLES
 * @property TbUnidad $tBUNIDADIDUNIDAD
 */
class TbUsuario extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbUsuario the static model class
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
		return 'tb_usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_USUARIO, REFERENCIA, TB_ROLES_ID_ROLES, TB_UNIDAD_ID_UNIDAD', 'required'),
			array('ID_USUARIO, COSTO, TB_ROLES_ID_ROLES, TB_UNIDAD_ID_UNIDAD', 'numerical', 'integerOnly'=>true),
			array('REFERENCIA, ASIGNACION, CONTRASENA, NIVELACCESO, ESTADO, NICK', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_USUARIO, REFERENCIA, COSTO, ASIGNACION, CONTRASENA, NIVELACCESO, ESTADO, NICK, TB_ROLES_ID_ROLES, TB_UNIDAD_ID_UNIDAD', 'safe', 'on'=>'search'),
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
			'tbPlanificacions' => array(self::HAS_MANY, 'TbPlanificacion', 'TB_USUARIO_ID_USUARIO'),
			'tbProyectos' => array(self::HAS_MANY, 'TbProyecto', 'TB_USUARIO_ID_USUARIO'),
			'tbRegistros' => array(self::HAS_MANY, 'TbRegistro', 'TB_USUARIO_ID_USUARIO'),
			'tBROLESIDROLES' => array(self::BELONGS_TO, 'TbRoles', 'TB_ROLES_ID_ROLES'),
			'tBUNIDADIDUNIDAD' => array(self::BELONGS_TO, 'TbUnidad', 'TB_UNIDAD_ID_UNIDAD'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_USUARIO' => 'Id Usuario',
			'REFERENCIA' => 'Referencia',
			'COSTO' => 'Costo',
			'ASIGNACION' => 'Asignacion',
			'CONTRASENA' => 'Contrasena',
			'NIVELACCESO' => 'Nivelacceso',
			'ESTADO' => 'Estado',
			'NICK' => 'Nick',
			'TB_ROLES_ID_ROLES' => 'Tb Roles Id Roles',
			'TB_UNIDAD_ID_UNIDAD' => 'Tb Unidad Id Unidad',
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

		$criteria->compare('ID_USUARIO',$this->ID_USUARIO);
		$criteria->compare('REFERENCIA',$this->REFERENCIA,true);
		$criteria->compare('COSTO',$this->COSTO);
		$criteria->compare('ASIGNACION',$this->ASIGNACION,true);
		$criteria->compare('CONTRASENA',$this->CONTRASENA,true);
		$criteria->compare('NIVELACCESO',$this->NIVELACCESO,true);
		$criteria->compare('ESTADO',$this->ESTADO,true);
		$criteria->compare('NICK',$this->NICK,true);
		$criteria->compare('TB_ROLES_ID_ROLES',$this->TB_ROLES_ID_ROLES);
		$criteria->compare('TB_UNIDAD_ID_UNIDAD',$this->TB_UNIDAD_ID_UNIDAD);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}