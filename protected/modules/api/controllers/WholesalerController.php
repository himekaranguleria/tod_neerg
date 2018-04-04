<?php
class WholesalerController extends ApiGxController {
	public function filters() {
		return array (
				'accessControl' 
		);
	}
	public function accessRules() {
		return array (
				array (
						'allow',
						'actions' => array (
								'download',
								'thumbnail',
								'requirement',
								'searchRequirement' ,
                                                    'index'
						),
						'users' => array (
								'*' 
						) 
				),
				array (
						'allow',
						'actions' => array (
								
								'view',
								'update',
								'delete',
								'create',
								
						),
						'users' => array (
								'@' 
						) 
				),
				array (
						'deny',
						'users' => array (
								'*' 
						) 
				) 
		);
	}
	
	public function isAllowed($model) {
		return $model->isAllowed ();
	}
	public function actionIndex() {
		$this->apiLoadList ( 'Wholesaler' );
	}
	
}
