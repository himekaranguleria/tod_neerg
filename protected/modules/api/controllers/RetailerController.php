<?php

class RetailerController extends ApiGxController {

    public function filters() {
        return array(
            'accessControl'
        );
    }

    public function accessRules() {
        return array(
            array(
                'allow',
                'actions' => array(
                    'download',
                    'thumbnail',
                    'requirement',
                    'searchRequirement',
                    'index',
                    'retailtradeList',
                    'restaurantList',
                    'indexsorted',
                    'myRetail',
                    'create',
                ),
                'users' => array(
                    '*'
                )
            ),
            array(
                'allow',
                'actions' => array(
                    'view',
                    'update',
                    'delete',
                ),
                'users' => array(
                    '@'
                )
            ),
            array(
                'deny',
                'users' => array(
                    '*'
                )
            )
        );
    }

    public function isAllowed($model) {
        return $model->isAllowed();
    }

    public function actionIndex() {
        $this->apiLoadList('Retailer');
    }

    public function actionIndexsorted() {
        $arr = array(
            'controller' => $this->id,
            'action' => $this->action->id,
            'status' => 'NOK'
        );
        $json_entry = array();
        $model = new Retailer ();
        $lat1 = "31.4684";
        $lon1 = "76.2708";
        if (isset($_POST ['Retailer'])) {
            $models = Retailer::model()->findAll();

            foreach ($models as $model) {
                $lat1 = $model->lat;
                $lon1 = $model->long;
                $lat2 = (@$_POST['Retailer']["lat"]) ? $_POST['Retailer']["lat"] : $lat1;
                $lon2 = (@$_POST['Retailer']["long"]) ? $_POST['Retailer']["long"] : $lon1;
                $theta = $lon1 - $lon2;
                $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
                $dist = acos($dist);
                $dist = rad2deg($dist);
                $miles = $dist * 60 * 1.1515;
                $arr_distance[$model->id] = $model->toArray();
                $arr_distance[$model->id]["distance"] = round($miles, 2);
                $arr_distance_val[$model->id]["distance"] = round($miles, 2);
            }
            asort($arr_distance_val);
            foreach ($arr_distance_val as $k => $val) {
                $arr ['list'] [] = $arr_distance[$k];
                $arr ['status'] = 'OK';
            }
            $this->sendJSONResponse($arr);
        }
    }

    public function actionCreate() {
        $arr = array(
            'controller' => $this->id,
            'action' => $this->action->id,
            'status' => 'NOK'
        );
        if (isset($_GET ['test'])) {
            $_POST ['Retailer'] ['name'] = 'Australia';
            $_POST ['Retailer'] ['phone_no'] = '3445566';
            $_POST ['Retailer'] ['street'] = 'null, Ghan ';
            $_POST ['Retailer'] ['city'] = 'Northern';
            $_POST ['Retailer'] ['zip_code'] = '0872';
            $_POST ['Retailer'] ['type_id'] = '1';
            $_POST ['Retailer'] ['wholesalers'] = '4,5';
            $_POST ['Retailer'] ['create_user_id'] = '21';
        }
        $json_entry = array();
        $model = new Retailer ();
        if (isset($_POST ['Retailer'])) {
            $model->setAttributes($_POST ['Retailer']);
            $address = $model->address = $model->street . " " . $model->city . " " . $model->zip_code;
            $model->state_id = 1;
            $wholeselers_all = $_POST['Retailer']['wholesalers'];
            $prepAddr = str_replace(' ', '+', $address);
            $geocode = file_get_contents('https://maps.google.com/maps/api/geocode/json?address=' . $prepAddr . '&sensor=false');
            $output = json_decode($geocode);
            if (@$output->results[0]->geometry->location->lat) {
                $model->lat = $latitude = $output->results[0]->geometry->location->lat;
                $model->long = $longitude = $output->results[0]->geometry->location->lng;
            }
            if ($model->save()) {
                if (@$wholeselers_all) {
                    if (strpos($wholeselers_all, ",")) {
                        $wholeselers = array_unique(explode(',', $wholeselers_all));
                        foreach ($wholeselers as $id) {
                            $retailerwholesaler = new RetailerWholesaler ();
                            $retailerwholesaler->retailer_id = $model->id;
                            $retailerwholesaler->wholesaler_id = $id;
                            $retailerwholesaler->create_user_id = $_POST['Retailer']['create_user_id'];
                            if ($retailerwholesaler->save()) {
                                $arr ['status'] = 'OK';
                                $arr ['detail'] = $model->toArray();
                            } else {
                                $err = '';
                                foreach ($retailerwholesaler->getErrors() as $error) {
                                    $err .= implode(',', $error);
                                }
                                $arr ['error'] = $err;
                            }
                        }
                    } else {
                        $retailerwholesaler = new RetailerWholesaler ();
                        $retailerwholesaler->retailer_id = $model->id;
                        $retailerwholesaler->wholesaler_id = $wholeselers_all;
                        $retailerwholesaler->create_user_id = $_POST['Retailer']['create_user_id'];
                        if ($retailerwholesaler->save()) {
                            $arr ['status'] = 'OK';
                            $arr ['detail'] = $model->toArray();
                        } else {
                            $err = '';
                            foreach ($retailerwholesaler->getErrors() as $error) {
                                $err .= implode(',', $error);
                            }
                            $arr ['error'] = $err;
                        }
                    }
                } else {
                    $arr ['status'] = 'OK';
                    $arr ['detail'] = $model->toArray();
                }
            } else {
                $err = '';
                foreach ($model->getErrors() as $error) {
                    $err .= implode(',', $error);
                }
                $arr ['error'] = $err;
            }
        }
        $this->sendJSONResponse($arr);
    }

    public function actionUpdate($id) {
        $arr = array(
            'controller' => $this->id,
            'action' => $this->action->id,
            'status' => 'NOK'
        );
        $model = $this->loadModel($id, 'Retailer');
        if (isset($_POST ['Retailer'])) {
            $model->attributes = $_POST ['Retailer'];
//            $model->saveUploadedFile($model, 'image_file');
            $wholeselers_all = $_POST['Retailer']['wholesalers'];
            $address = $model->address = $model->street . " " . $model->city . " " . $model->zip_code;

            $prepAddr = str_replace(' ', '+', $address);
            $geocode = file_get_contents('https://maps.google.com/maps/api/geocode/json?address=' . $prepAddr . '&sensor=false');
            $output = json_decode($geocode);
            if (@$output->results[0]->geometry->location->lat) {
                $model->lat = $latitude = $output->results[0]->geometry->location->lat;
                $model->long = $longitude = $output->results[0]->geometry->location->lng;
            }
            if ($model->save()) {
                if (@$wholeselers_all) {
                    $wholeselers = array_unique(explode(',', $wholeselers_all));
                    foreach ($wholeselers as $id) {
                        $retailerwholesaler = new RetailerWholesaler ();
                        $retailerwholesaler->retailer_id = $model->id;
                        $retailerwholesaler->wholesaler_id = $id;
                        if ($retailerwholesaler->save()) {
                            $arr ['status'] = 'OK';
                            $arr ['detail'] = $model->toArray();
                        } else {
                            $err = '';
                            foreach ($retailerwholesaler->getErrors() as $error) {
                                $err .= implode(',', $error);
                            }
                            $arr ['error'] = $err;
                        }
                    }
                } else {
                    $arr ['status'] = 'OK';
                    $arr ['detail'] = $model->toArray();
                }
            }
        }
        $this->sendJSONResponse($arr);
    }

    public function actionDelete($id) {
        $this->apiModelDelete($id, 'Retailer');
    }

    public function actionView($id) {
        $this->apiloadModel($id, 'Retailer');
    }

    public function actionRetailtradeList() {
        $arr = array(
            'controller' => $this->id,
            'action' => $this->action->id,
            'status' => 'NOK'
        );
        $json_entry = array();
        $criteria = new CDbCriteria ();
        $criteria->compare('type_id ', Retailer::TYPE_RETAIL_TRADE);
        $results = Retailer::model()->findAll($criteria);
        if ($results) {
            foreach ($results as $result) {
                $json_entry [] = $result->toArray();
            }
            $arr ['list'] = $json_entry;
            $arr ['status'] = 'OK';
        } else {
            $arr ['error'] = Yii::t('app', 'No record found...!');
        }
        $this->sendJSONResponse($arr);
    }

    public function actionRestaurantList() {
        $arr = array(
            'controller' => $this->id,
            'action' => $this->action->id,
            'status' => 'NOK'
        );
        $json_entry = array();
        $criteria = new CDbCriteria ();
        $criteria->compare('type_id ', Retailer::TYPE_RESTAURANT);
        $results = Retailer::model()->findAll($criteria);
        if ($results) {
            foreach ($results as $result) {
                $json_entry [] = $result->toArray();
            }
            $arr ['list'] = $json_entry;
            $arr ['status'] = 'OK';
        } else {
            $arr ['error'] = Yii::t('app', 'No record found...!');
        }
        $this->sendJSONResponse($arr);
    }

    public function actionMyRetail() {
        $arr = array(
            'controller' => $this->id,
            'action' => $this->action->id,
            'status' => 'NOK'
        );
        if (isset($_GET ['test'])) {
            $_POST ['Retailer'] ['create_user_id'] = '21';
        }
        $json_entry = array();
        $criteria = new CDbCriteria ();
//        $criteria->compare('type_id ', Job::POST_REQUEST);
        $criteria->compare('create_user_id ', Yii::app()->user->id);
        $results = Retailer::model()->findAll($criteria);
        if ($results) {
            foreach ($results as $result) {
//                $job = $result->job;
                $json_entry [] = $result->toArray();
            }
            $arr ['list'] = $json_entry;
            $arr ['status'] = 'OK';
        } else {
            $arr ['error'] = Yii::t('app', 'No record found...!');
        }
        $this->sendJSONResponse($arr);
    }

}
