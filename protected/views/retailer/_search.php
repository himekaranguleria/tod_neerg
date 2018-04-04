<div class="wide form">

<?php 	$form = $this->beginWidget('booster.widgets.TbActiveForm', array(
	'action' => Yii::app()->createUrl($this->route),
	//'method' => 'get',
	'id' => 'retailer-form',
	'type'=>'horizontal',		
)); ; 
?>

	<div class="row">
		<?php echo $form->label($model, 'id'); ?>
		<?php echo $form->textField($model, 'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'name'); ?>
		<?php echo $form->textField($model, 'name', array('maxlength' => 256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'data_dn'); ?>
		<?php echo $form->textField($model, 'data_dn', array('maxlength' => 256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'address'); ?>
		<?php echo $form->textField($model, 'address', array('maxlength' => 256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'street'); ?>
		<?php echo $form->textField($model, 'street', array('maxlength' => 256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'city'); ?>
		<?php echo $form->textField($model, 'city', array('maxlength' => 256)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'zip_code'); ?>
		<?php echo $form->textField($model, 'zip_code'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'phone_no'); ?>
		<?php echo $form->textField($model, 'phone_no', array('maxlength' => 11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'fax_no'); ?>
		<?php echo $form->textField($model, 'fax_no', array('maxlength' => 11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'mobile_no'); ?>
		<?php echo $form->textField($model, 'mobile_no', array('maxlength' => 11)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'image_file'); ?>
		<?php echo $form->textField($model, 'image_file', array('size'=>80,'maxlength' => 512)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'm_type_1'); ?>
		<?php echo $form->textField($model, 'm_type_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'm_weight_1'); ?>
		<?php echo $form->textField($model, 'm_weight_1'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'm_type_2'); ?>
		<?php echo $form->textField($model, 'm_type_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'm_weight_2'); ?>
		<?php echo $form->textField($model, 'm_weight_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'm_type_3'); ?>
		<?php echo $form->textField($model, 'm_type_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'm_weight_3'); ?>
		<?php echo $form->textField($model, 'm_weight_3'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'wholeseler_id'); ?>
		<?php echo $form->dropDownList($model, 'wholeseler_id', GxHtml::listDataEx(Wholesaler::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'state_id'); ?>
		<?php 
			$this->widget('ext.widgets.CJuiRadioButtonList', array(
			'model'=>$model,
			'attribute'=>'state_id',
			'data'=>$model->getStatusOptions(),
			)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'type_id'); ?>
		<?php 
			$this->widget('ext.widgets.CJuiRadioButtonList', array(
			'model'=>$model,
			'attribute'=>'type_id',
			'data'=>$model->getTypeOptions(),
			)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'create_time'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'create_time',
			'value' => $model->create_time,
			'options' => array(
			'showButtonPanel' => true,
			'changeYear' => true,
			'dateFormat' => 'yy-mm-dd',
			),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'update_time'); ?>
		<?php $form->widget('zii.widgets.jui.CJuiDatePicker', array(
			'model' => $model,
			'attribute' => 'update_time',
			'value' => $model->update_time,
			'options' => array(
			'showButtonPanel' => true,
			'changeYear' => true,
			'dateFormat' => 'yy-mm-dd',
			),
			));
; ?>
	</div>

	<div class="row">
		<?php echo $form->label($model, 'create_user_id'); ?>
		<?php echo $form->dropDownList($model, 'create_user_id', GxHtml::listDataEx(User::model()->findAllAttributes(null, true)), array('prompt' => Yii::t('app', 'All'))); ?>
	</div>


	<div class="form-group">
		<?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'label'=>'Search',
		)); ?>
	</div>
<?php $this->endWidget(); ?>

</div><!-- search-form -->
