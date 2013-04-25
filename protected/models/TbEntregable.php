<?php

/**
 * This is the model class for table "tb_entregable".
 *
 * The followings are the available columns in table 'tb_entregable':
 * @property integer $ID_ENTREGABLE
 * @property string $REFERENCIA
 * @property string $DESCRIPCION
 * @property integer $TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE
 * @property integer $ETAPA_ID_ETAPA
 * @property integer $TB_PRODUCTO_ID_PRODUCTO
 * @property integer $TB_PROYECTO_ID_PROYECTO
 *
 * The followings are the available model relations:
 * @property TbTipoEntregable $tBTIPOENTREGABLEIDTIPOENTREGABLE
 * @property Etapa $eTAPAIDETAPA
 * @property TbProducto $tBPRODUCTOIDPRODUCTO
 * @property TbProyecto $tBPROYECTOIDPROYECTO
 * @property TbPlanificacion[] $tbPlanificacions
 * @property TbRegistro[] $tbRegistros
 */
class TbEntregable extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TbEntregable the static model class
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
		return 'tb_entregable';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID_ENTREGABLE, REFERENCIA, TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE, ETAPA_ID_ETAPA, TB_PRODUCTO_ID_PRODUCTO, TB_PROYECTO_ID_PROYECTO', 'required'),
			array('ID_ENTREGABLE, TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE, ETAPA_ID_ETAPA, TB_PRODUCTO_ID_PRODUCTO, TB_PROYECTO_ID_PROYECTO', 'numerical', 'integerOnly'=>true),
			array('REFERENCIA, DESCRIPCION', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID_ENTREGABLE, REFERENCIA, DESCRIPCION, TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE, ETAPA_ID_ETAPA, TB_PRODUCTO_ID_PRODUCTO, TB_PROYECTO_ID_PROYECTO', 'safe', 'on'=>'search'),
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
			'tBTIPOENTREGABLEIDTIPOENTREGABLE' => array(self::BELONGS_TO, 'TbTipoEntregable', 'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE'),
			'eTAPAIDETAPA' => array(self::BELONGS_TO, 'Etapa', 'ETAPA_ID_ETAPA'),
			'tBPRODUCTOIDPRODUCTO' => array(self::BELONGS_TO, 'TbProducto', 'TB_PRODUCTO_ID_PRODUCTO'),
			'tBPROYECTOIDPROYECTO' => array(self::BELONGS_TO, 'TbProyecto', 'TB_PROYECTO_ID_PROYECTO'),
			'tbPlanificacions' => array(self::HAS_MANY, 'TbPlanificacion', 'TB_ENTREGABLE_ID_ENTREGABLE'),
			'tbRegistros' => array(self::HAS_MANY, 'TbRegistro', 'TB_ENTREGABLE_ID_ENTREGABLE'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID_ENTREGABLE' => 'Id Entregable',
			'REFERENCIA' => 'Referencia',
			'DESCRIPCION' => 'Descripcion',
			'TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE' => 'Tb Tipo Entregable Id Tipo Entregable',
			'ETAPA_ID_ETAPA' => 'Etapa Id Etapa',
			'TB_PRODUCTO_ID_PRODUCTO' => 'Tb Producto Id Producto',
			'TB_PROYECTO_ID_PROYECTO' => 'Tb Proyecto Id Proyecto',
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
		$criteria->compare('REFERENCIA',$this->REFERENCIA,true);
		$criteria->compare('DESCRIPCION',$this->DESCRIPCION,true);
		$criteria->compare('TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE',$this->TB_TIPO_ENTREGABLE_ID_TIPO_ENTREGABLE);
		$criteria->compare('ETAPA_ID_ETAPA',$this->ETAPA_ID_ETAPA);
		$criteria->compare('TB_PRODUCTO_ID_PRODUCTO',$this->TB_PRODUCTO_ID_PRODUCTO);
		$criteria->compare('TB_PROYECTO_ID_PROYECTO',$this->TB_PROYECTO_ID_PROYECTO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}