<?php
class Website extends CActiveRecord {

	public static function model($className=__CLASS__) {
		//print_r(parent::model($className)); exit;
		return parent::model($className);
	}

	public function tableName() {
		$userid = Yii::app()->request->cookies['user_id']->value;
		//echo $userid; exit;
		//print_r(Yii::app()->db->tablePrefix.'website'); exit;
		return Yii::app()->db->tablePrefix.'website';
	}
	public function search(){
		$userid = Yii::app()->request->cookies['user_id']->value;
		$criteria=new CDbCriteria;
		$criteria->compare('user_id',$userid);
		return new CActiveDataprovider($this,array('criteria'=>$criteria));
	}
    public function total() {
        return $this->cache(60*60*5)->count();
    }

}