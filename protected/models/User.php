<?php

/**
 * This is the model class for table "user".
 *
 * The followings are the available columns in table 'user':
 * @property integer $user_id
 * @property string $user_foto
 * @property string $user_name
 * @property string $user_username
 * @property string $user_password
 * @property string $user_level
 * @property string $user_create_date
 * @property string $user_status
 */
class User extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('user_username, user_password, user_level, user_status', 'required'),
			array('user_name', 'length', 'max'=>255),
			array('user_username', 'length', 'max'=>40),
			array('user_password', 'length', 'max'=>250),
			array('user_level', 'length', 'max'=>200),
			array('user_status', 'length', 'max'=>1),
			array('user_foto, user_create_date', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('user_id, user_foto, user_name, user_username, user_password, user_level, user_create_date, user_status', 'safe', 'on'=>'search'),
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
			'user_id' => 'User',
			'user_foto' => 'User Foto',
			'user_name' => 'User Name',
			'user_username' => 'User Username',
			'user_password' => 'User Password',
			'user_level' => 'User Level',
			'user_create_date' => 'User Create Date',
			'user_status' => 'User Status',
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

		$criteria->compare('user_id',$this->user_id);
		$criteria->compare('user_foto',$this->user_foto,true);
		$criteria->compare('user_name',$this->user_name,true);
		$criteria->compare('user_username',$this->user_username,true);
		$criteria->compare('user_password',$this->user_password,true);
		$criteria->compare('user_level',$this->user_level,true);
		$criteria->compare('user_create_date',$this->user_create_date,true);
		$criteria->compare('user_status',$this->user_status,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
