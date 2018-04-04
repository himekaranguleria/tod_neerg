
<?php $this->widget('booster.widgets.TbGridView', array(
'id' => 'retailer-wholesaler-grid',
'type'=>'bordered condensed striped',
'selectionChanged'=>"function(id){window.location='" . Yii::app()->createAbsoluteUrl('retailerWholesaler/view') . "/' + $.fn.yiiGridView.getSelection(id);}",
'dataProvider' => $dataProvider,
'columns' => array(
		'id',
		array(
			'name'=>'retailer_id',
			'value'=>'GxHtml::valueEx($data->retailer)',
			'filter'=>GxHtml::listDataEx(Retailer::model()->findAllAttributes(null, true)),
			),
		array(
			'name'=>'wholesaler_id',
			'value'=>'GxHtml::valueEx($data->wholesaler)',
			'filter'=>GxHtml::listDataEx(Wholesaler::model()->findAllAttributes(null, true)),
			),
		array(
				'name' => 'state_id',
				'value'=>'$data->getStatusOptions($data->state_id)',
				'filter'=>RetailerWholesaler::getStatusOptions(),
				),
		array(
				'name' => 'type_id',
				'value'=>'$data->getTypeOptions($data->type_id)',
				'filter'=>RetailerWholesaler::getTypeOptions(),
				),
		'update_time:datetime',
array(
'header' => '<a>Actions</a>',
'class' => 'booster.widgets.TbButtonColumn',
'htmlOptions' => array(
'nowrap' => 'nowrap'
)
)
),
)); ?>