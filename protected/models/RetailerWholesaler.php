<?php

/**
 * Company: flamedevelopers < www.flamedevelopers.com>
 * Author : flamedevelopers < flamedevelopers.com >
 */
/**
 * @property integer $id
 * @property integer $retailer_id
 * @property integer $wholesaler_id
 * @property integer $state_id
 * @property integer $type_id
 * @property string $create_time
 * @property string $update_time
 * @property integer $create_user_id
 */
Yii::import('application.models._base.BaseRetailerWholesaler');

class RetailerWholesaler extends BaseRetailerWholesaler {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function toArray($id = null, $session_id = null) {
        $user = $this;
        $json_entry = array();
        if ($session_id != null)
            $json_entry ['session_id'] = $session_id;
        $json_entry ["id"] = $user->id;
        $json_entry ['retailer_id'] = isset($user->retailer_id) ? $user->retailer_id : "";
        $json_entry ['wholesaler_id'] = isset($user->wholesaler_id) ? $user->wholesaler_id : "";
        $criteria_wholesaler = new CDbCriteria ();
        $criteria_wholesaler->compare('id ', $user->wholesaler_id);
        $job_wholesalers = Wholesaler::model()->findAll($criteria_wholesaler);
        if ($job_wholesalers) {
            foreach ($job_wholesalers as $job_wholesaler) {
                $json_list [] = $job_wholesaler->toArray();
            }
            $json_entry ['wholesaler_info'] = $json_list;
        }
        return $json_entry;
    }
//   protected function beforeDelete() {
//       
//       
//        Retailer::model()->deleteAllByAttributes(array(
//            'wholesaler_id' => $this->id
//        ));
//        return parent::beforeDelete();
//    }

}
