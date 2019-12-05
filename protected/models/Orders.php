<?php

/**
 * This is the model class for table "orders".
 *
 * The followings are the available columns in table 'orders':
 * @property integer $id_orders
 * @property string $nama_petugas
 * @property string $tgl_order
 * @property string $jam_order
 */
class Orders extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'orders';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_petugas, tgl_order, jam_order', 'required'),
			array('nama_petugas', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_orders, nama_petugas, tgl_order, jam_order', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_orders' => 'Id Orders',
			'nama_petugas' => 'Nama Petugas',
			'tgl_order' => 'Tgl Order',
			'jam_order' => 'Jam Order',
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

		$criteria->compare('id_orders',$this->id_orders);
		$criteria->compare('nama_petugas',$this->nama_petugas,true);
		$criteria->compare('tgl_order',$this->tgl_order,true);
		$criteria->compare('jam_order',$this->jam_order,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Orders the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
