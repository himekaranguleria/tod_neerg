<?php

/**
 * Company: flamedevelopers < www.flamedevelopers.com>
 * Author : flamedevelopers < flamedevelopers.com >
 */
/**
 * @property integer $id
 * @property string $name
 * @property string $address
 * @property string $street
 * @property string $city
 * @property integer $zip_code
 * @property string $phone_no
 * @property string $image_file
 * @property integer $m_type_1
 * @property integer $m_type_2
 * @property integer $m_type_3
 * @property integer $q_1
 * @property integer $q_2
 * @property integer $q_3
 * @property integer $q_4
 * @property string $temp
 * @property integer $state_id
 * @property integer $type_id
 * @property string $create_time
 * @property string $update_time
 * @property integer $create_user_id
 */
Yii::import('application.models._base.BaseWholesaler');

class Wholesaler extends BaseWholesaler {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function toArray($id = null, $session_id = null) {
        $user = $this;
        $json_entry = array();
        if ($session_id != null)
            $json_entry ['session_id'] = $session_id;
        $json_entry ["id"] = $user->id;
        $json_entry ['name'] = isset($user->name) ? $user->name : "";
        $json_entry ['address'] = isset($user->address) ? $user->address : "";
        $json_entry ['street'] = isset($user->street) ? $user->street : "";
        $json_entry ['city'] = isset($user->city) ? $user->city : "";
        $json_entry ['zip_code'] = isset($user->zip_code) ? $user->zip_code : "";
        $json_entry ['phone_no'] = isset($user->phone_no) ? $user->phone_no : "";
        if (@$user->image_file) {
            $img = "http://www.flamedevelopers.in". UPLOAD_PATH . $user->image_file;
        } else {
            $img = "";
        };
        $json_entry ['image_file'] = $img;
        $json_entry ['m_type_1'] = isset($user->m_type_1) ? $user->m_type_1 : "";
        $json_entry ['m_type_2'] = isset($user->m_type_2) ? $user->m_type_2 : "";
        $json_entry ['m_type_3'] = isset($user->m_type_3) ? $user->m_type_3 : "";
        $json_entry ['q_1'] = isset($user->q_1) ? $user->q_1 : "";
        $json_entry ['q_2'] = isset($user->q_2) ? $user->q_2 : "";
        $json_entry ['q_3'] = isset($user->q_3) ? $user->q_3 : "";
        $json_entry ['q_4'] = isset($user->q_4) ? $user->q_4 : "";
        $json_entry ['temp'] = isset($user->temp) ? $user->temp : "";
        $json_entry ['state_id'] = isset($user->state_id) ? $user->state_id : "";
        $json_entry ['type_id'] = isset($user->type_id) ? $user->type_id : "";
        $json_entry ['lat'] = isset($user->lat) ? $user->lat : "";
        $json_entry ['long'] = isset($user->long) ? $user->long : "";
        return $json_entry;
    }

    protected function beforeDelete() {

        RetailerWholesaler::model()->deleteAllByAttributes(array(
            'wholesaler_id' => $this->id
        ));
        return parent::beforeDelete();
    }

}
