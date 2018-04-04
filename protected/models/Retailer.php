<?php

/**
 * Company: flamedevelopers < www.flamedevelopers.com>
 * Author : flamedevelopers < flamedevelopers.com >
 */
/**
 * @property integer $id
 * @property string $name
 * @property string $data_dn
 * @property string $address
 * @property string $street
 * @property string $city
 * @property integer $zip_code
 * @property string $phone_no
 * @property string $fax_no
 * @property string $mobile_no
 * @property string $image_file
 * @property integer $m_type_1
 * @property integer $m_weight_1
 * @property integer $m_type_2
 * @property integer $m_weight_2
 * @property integer $m_type_3
 * @property integer $m_weight_3
 * @property integer $wholeseler_id
 * @property integer $state_id
 * @property integer $type_id
 * @property string $create_time
 * @property string $update_time
 * @property integer $create_user_id
 */
Yii::import('application.models._base.BaseRetailer');

class Retailer extends BaseRetailer {

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
        $json_entry ['phone_no'] = isset($user->fax_no) ? $user->phone_no : "";
        $json_entry ['fax_no'] = isset($user->phone_no) ? $user->fax_no : "";
        $json_entry ['mobile_no'] = isset($user->mobile_no) ? $user->mobile_no : "";
        $json_entry ['image_file'] = isset($user->image_file) ? $user->image_file : "";
        $json_entry ['m_type_1'] = isset($user->m_type_1) ? $user->m_type_1 : "";
        $json_entry ['m_type_2'] = isset($user->m_type_2) ? $user->m_type_2 : "";
        $json_entry ['m_type_3'] = isset($user->m_type_3) ? $user->m_type_3 : "";
        $json_entry ['m_weight_1'] = isset($user->m_weight_1) ? $user->m_weight_1 : "";
        $json_entry ['m_weight_2'] = isset($user->m_weight_2) ? $user->m_weight_2 : "";
        $json_entry ['m_weight_3'] = isset($user->m_weight_3) ? $user->m_weight_3 : "";
        $json_entry ['data_dn'] = isset($user->data_dn) ? $user->data_dn : "";
        $json_entry ['state_id'] = isset($user->state_id) ? $user->state_id : "";
        $json_entry ['type_id'] = isset($user->type_id) ? $user->type_id : "";
        $json_entry ['lat'] = isset($user->lat) ? $user->lat : "";
        $json_entry ['long'] = isset($user->long) ? $user->long : "";
        $criteria_wholesaler = new CDbCriteria ();
        $criteria_wholesaler->compare('retailer_id ', $user->id);
        $wholesalers = RetailerWholesaler::model()->findAll($criteria_wholesaler);
        $json_list = array();
        if ($wholesalers) {
            foreach ($wholesalers as $wholesaler) {
                $json_list [] = $wholesaler->toArray();
            }
            $json_entry ['wholesalers'] = $json_list;
        }
        return $json_entry;
    }
 protected function beforeDelete() {
       
        RetailerWholesaler::model()->deleteAllByAttributes(array(
            'retailer_id' => $this->id
        ));
        return parent::beforeDelete();
    }
}
