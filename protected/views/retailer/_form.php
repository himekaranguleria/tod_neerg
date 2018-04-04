<!--  form code start here -->
<div class="form">

    
    <?php     $form=$this->beginWidget('booster.widgets.TbActiveForm',array(
    'id' => 'retailer-form',
    'type'=>'horizontal',
    'enableAjaxValidation' => true,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
    ));
    ?>
    <p class="help-block" align="right">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

                        
            <?php echo $form->textFieldGroup($model,'name',array('class'=>'form-control','maxlength'=>256)); ?>

                    
            <?php echo $form->textFieldGroup($model,'data_dn',array('class'=>'form-control','maxlength'=>256)); ?>

                    
            <?php echo $form->textFieldGroup($model,'address',array('class'=>'form-control','maxlength'=>256)); ?>

                    
            <?php echo $form->textFieldGroup($model,'street',array('class'=>'form-control','maxlength'=>256)); ?>

                    
            <?php echo $form->textFieldGroup($model,'city',array('class'=>'form-control','maxlength'=>256)); ?>

                    
            <?php echo $form->textFieldGroup($model,'zip_code',array('class'=>'form-control')); ?>

                    
            <?php echo $form->textFieldGroup($model,'phone_no',array('class'=>'form-control','maxlength'=>11)); ?>

                    
            <?php echo $form->textFieldGroup($model,'fax_no',array('class'=>'form-control','maxlength'=>11)); ?>

                    
            <?php echo $form->textFieldGroup($model,'mobile_no',array('class'=>'form-control','maxlength'=>11)); ?>

                    
            <?php echo $form->fileFieldGroup($model, 'image_file'); ?>

                    
            <?php echo $form->textFieldGroup($model,'m_type_1',array('class'=>'form-control')); ?>

                    
            <?php echo $form->textFieldGroup($model,'m_weight_1',array('class'=>'form-control')); ?>

                    
            <?php echo $form->textFieldGroup($model,'m_type_2',array('class'=>'form-control')); ?>

                    
            <?php echo $form->textFieldGroup($model,'m_weight_2',array('class'=>'form-control')); ?>

                    
            <?php echo $form->textFieldGroup($model,'m_type_3',array('class'=>'form-control')); ?>

                    
            <?php echo $form->textFieldGroup($model,'m_weight_3',array('class'=>'form-control')); ?>

                   
    <?php echo $form->dropDownListGroup($model, 'wholeseler_id', array('widgetOptions' => array('data' => CHtml::listData(Retailer::model()->findAll(array('order' => 'id ASC')), 'id', 'name'), 'htmlOptions' => array('class' => 'input-large', 'empty' => 'Select wholeseler')))); ?>
 
            <?php // echo $form->radioButtonListGroup($model, 'wholeseler_id', GxHtml::listDataEx(Wholesaler::model()->findAllAttributes(null, true))); ?>

                    
            <?php echo $form->dropDownListGroup($model,'state_id', array('widgetOptions'=>array('data'=>$model->getStatusOptions(), 'htmlOptions'=>array('class'=>'input-large')))); ?>

                    
            <?php echo $form->dropDownListGroup($model,'type_id', array('widgetOptions'=>array('data'=>$model->getTypeOptions(), 'htmlOptions'=>array('class'=>'input-large')))); ?>

                                
            <?php echo $form->datepickerGroup($model, 'update_time',
					array('hint'=>'Click inside! to select a date.',
					'prepend'=>'<i class="icon-calendar"></i>'))
; ?>

                        
            
            
    
    <div class="form-group">
        <?php $this->widget('booster.widgets.TbButton', array(
			'buttonType'=>'submit',
			'label'=>'Save',
                         'context' => 'success',
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div>
<!-- form code ends here -->