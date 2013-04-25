<?php

/**
 * This is the model class for table "tb_proyecto".
 *
 * The followings are the available columns in table 'tb_proyecto':
 * @property integer $ID_PROYECTO
 * @property string $REFERENCIA
 * @property string $DESCRIPCION
 * @property string $RESPONSABLE
 * @property integer $TB_USUARIO_ID_USUARIO
 * @property string $ESTADO
 *
 * The followings are the available model relations:
 * @property TbEntregable[] $tbEntregables
 * @property TbUsuario $tBUSUARIOIDUSUARIO
 * @property TbTarea[] $tbTareas
 */
class TbProyecto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbProyecto the static model class
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
		return 'tb_proyecto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_PROYECTO, REFERENCIA, TB_USUARIO_ID_USUARIO', 'required'),
			array('ID_PROYECTO, TB_USUARIO_ID_USUARIO', 'numerical', 'integerOnly'=>true),
			array('REFERENCIA, DESCRIPCION, RESPONSABLE, ESTADO', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_PROYECTO, REFERENCIA, DESCRIPCION, RESPONSABLE, TB_USUARIO_ID_USUARIO, ESTADO', 'safe', 'on'=>'search'),
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
			'tbEntregables' => array(self::HAS_MANY, 'TbEntregable', 'TB_PROYECTO_ID_PROYECTO'),
			'tBUSUARIOIDUSUARIO' => array(self::BELONGS_TO, 'TbUsuario', 'TB_USUARIO_ID_USUARIO'),
			'tbTareas' => array(self::HAS_MANY, 'TbTarea', 'TB_PROYECTO_ID_PROYECTO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_PROYECTO' => 'Id Proyecto',
			'REFERENCIA' => 'Referencia',
			'DESCRIPCION' => 'Descripcion',
			'RESPONSABLE' => 'Responsable',
			'TB_USUARIO_ID_USUARIO' => 'Tb Usuario Id Usuario',
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

		$criteria->compare('ID_PROYECTO',$this->ID_PROYECTO);
		$criteria->compare('REFERENCIA',$this->REFERENCIA,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('RESPONSABLE',$this->RESPONSABLE,true);
		$criteria->compare('TB_USUARIO_ID_USUARIO',$this->TB_USUARIO_ID_USUARIO);
		$criteria->compare('ESTADO',$this->ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}