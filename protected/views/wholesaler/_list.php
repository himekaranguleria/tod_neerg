
<?php $this->widget('booster.widgets.TbGridView', array(
'id' => 'wholesaler-grid',
'type'=>'bordered condensed striped',
'selectionChanged'=>"function(id){window.location='" . Yii::app()->createAbsoluteUrl('wholesaler/view') . "/' + $.fn.yiiGridView.getSelection(id);}",
'dataProvider' => $dataProvider,
'columns' => array(
		'id',
		'name',
		'address',
		'street',
		'city',
		'zip_code',
		/*
		'phone_no',
		'image_file',
		array(
				'name' => 'm_type_1',
				'value'=>'$data->getTypeOptions($data->m_type_1)',
				'filter'=>Wholesaler::getTypeOptions(),
				),
		array(
				'name' => 'm_type_2',
				'value'=>'$data->getTypeOptions($data->m_type_2)',
				'filter'=>Wholesaler::getTypeOptions(),
				),
		array(
				'name' => 'm_type_3',
				'value'=>'$data->getTypeOptions($data->m_type_3)',
				'filter'=>Wholesaler::getTypeOptions(),
				),
		'q_1',
		'q_2',
		'q_3',
		'q_4',
		'temp',
		array(
				'name' => 'state_id',
				'value'=>'$data->getStatusOptions($data->state_id)',
				'filter'=>Wholesaler::getStatusOptions(),
				),
		array(
				'name' => 'type_id',
				'value'=>'$data->getTypeOptions($data->type_id)',
				'filter'=>Wholesaler::getTypeOptions(),
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