
<?php $this->widget('booster.widgets.TbGridView', array(
'id' => 'retailer-grid',
'type'=>'bordered condensed striped',
'selectionChanged'=>"function(id){window.location='" . Yii::app()->createAbsoluteUrl('retailer/view') . "/' + $.fn.yiiGridView.getSelection(id);}",
'dataProvider' => $dataProvider,
'columns' => array(
		'id',
		'name',
		'data_dn',
		'address',
		'street',
		'city',
		/*
		'zip_code',
		'phone_no',
		'fax_no',
		'mobile_no',
		'image_file',
		array(
				'name' => 'm_type_1',
				'value'=>'$data->getTypeOptions($data->m_type_1)',
				'filter'=>Retailer::getTypeOptions(),
				),
		'm_weight_1',
		array(
				'name' => 'm_type_2',
				'value'=>'$data->getTypeOptions($data->m_type_2)',
				'filter'=>Retailer::getTypeOptions(),
				),
		'm_weight_2',
		array(
				'name' => 'm_type_3',
				'value'=>'$data->getTypeOptions($data->m_type_3)',
				'filter'=>Retailer::getTypeOptions(),
				),
		'm_weight_3',
		array(
			'name'=>'wholeseler_id',
			'value'=>'GxHtml::valueEx($data->wholeseler)',
			'filter'=>GxHtml::listDataEx(Wholesaler::model()->findAllAttributes(null, true)),
			),
		array(
				'name' => 'state_id',
				'value'=>'$data->getStatusOptions($data->state_id)',
				'filter'=>Retailer::getStatusOptions(),
				),
		array(
				'name' => 'type_id',
				'value'=>'$data->getTypeOptions($data->type_id)',
				'filter'=>Retailer::getTypeOptions(),
				),
		'update_time:datetime',
		*/
array(
'header' => '<a>Actions</a>',
'class' => 'booster.widgets.TbButtonColumn',
'htmlOptions' => array(
'nowrap' => 'nowrap'
)
)
),
)); ?>