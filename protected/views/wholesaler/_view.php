
<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<?php echo GxHtml::encode($data->getAttributeLabel('id')); ?>:
	<?php echo GxHtml::encode($data->id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('name')); ?>:
	<?php echo GxHtml::encode($data->name); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('address')); ?>:
	<?php echo GxHtml::encode($data->address); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('street')); ?>:
	<?php echo GxHtml::encode($data->street); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('city')); ?>:
	<?php echo GxHtml::encode($data->city); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('zip_code')); ?>:
	<?php echo GxHtml::encode($data->zip_code); ?>
	<br />
	<?php /*
	<?php echo GxHtml::encode($data->getAttributeLabel('phone_no')); ?>:
	<?php echo GxHtml::encode($data->phone_no); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('image_file')); ?>:
	<?php echo GxHtml::encode($data->image_file); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('m_type_1')); ?>:
	<?php echo GxHtml::encode($data->m_type_1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('m_type_2')); ?>:
	<?php echo GxHtml::encode($data->m_type_2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('m_type_3')); ?>:
	<?php echo GxHtml::encode($data->m_type_3); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('q_1')); ?>:
	<?php echo GxHtml::encode($data->q_1); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('q_2')); ?>:
	<?php echo GxHtml::encode($data->q_2); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('q_3')); ?>:
	<?php echo GxHtml::encode($data->q_3); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('q_4')); ?>:
	<?php echo GxHtml::encode($data->q_4); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('temp')); ?>:
	<?php echo GxHtml::encode($data->temp); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('state_id')); ?>:
	<?php echo GxHtml::encode($data->state_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('type_id')); ?>:
	<?php echo GxHtml::encode($data->type_id); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_time')); ?>:
	<?php echo GxHtml::encode($data->create_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('update_time')); ?>:
	<?php echo GxHtml::encode($data->update_time); ?>
	<br />
	<?php echo GxHtml::encode($data->getAttributeLabel('create_user_id')); ?>:
		<?php echo GxHtml::encode(GxHtml::valueEx($data->createUser)); ?>
	<br />
	*/ ?>

</div>