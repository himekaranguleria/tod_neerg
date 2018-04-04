<!--  form code start here -->
<div class="form">
    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'wholesaler-form',
        'type' => 'horizontal',
        'enableAjaxValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>
    <p class="help-block" align="right">Fields with <span class="required">*</span> are required.</p>
    <?php echo $form->errorSummary($model); ?>
    <div class="bottom-border">  <b>Informationen</b>  </div>  <hr>
    <div class="row">
        <div class="col-md-3">
            Name
        </div>
        <div class="col-md-9">
            <?php echo $form->textFieldGroup($model, 'name', array('labelOptions' => array("label" => false), 'class' => 'form-control', 'maxlength' => 256)); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            Address
        </div>
        <div class="col-md-9">
            <?php echo $form->textFieldGroup($model, 'street', array('labelOptions' => array("label" => false), 'class' => 'form-control', 'maxlength' => 256)); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-md-3"> </div>
        <div class="col-md-9 one-half">
            <?php echo $form->textFieldGroup($model, 'zip_code', array('labelOptions' => array("label" => false), 'class' => 'form-control', 'maxlength' => 256)); ?>
       
        
            <?php echo $form->textFieldGroup($model, 'city', array('labelOptions' => array("label" => false), 'class' => 'form-control', 'maxlength' => 256)); ?>
           </div> </div>
    <div class="row">
        <div class="col-md-3">
            Phone
        </div>
        <div class="col-md-9">
            <?php echo $form->textFieldGroup($model, 'phone_no', array('labelOptions' => array("label" => false), 'class' => 'form-control', 'maxlength' => 256)); ?>
        </div>
    </div>
    <div class="bottom-border">  <b>Bekanntmachung</b>  </div>  <hr>

    <div class="row">
        <div class="col-md-7">
            <div class="row">
                <div class="col-md-6"> 
                    Fleischart:
                </div>
                <div class="col-md-6" style="border-right:1px solid #000; padding:5px">

                    <div class="col-md-3">    
                        <p><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/u120.png" height="40" width="40"></p>
                        <p class="pcenter"> <input name="Wholesaler[m_type_1]" id="Wholesaler_m_type_1" value="1" type="checkbox" <?php
                            if (@$model->m_type_1) {
                                echo "checked='checked'";
                            }
                            ?>></p>
                    </div>
                    <div class="col-md-3">  
                        <p><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/u119.png"  height="40" width="40"></p>
                        <p class="pcenter"> <input name="Wholesaler[m_type_2]" id="Wholesaler_m_type_2" value="1" type="checkbox" <?php
                            if (@$model->m_type_2) {
                                echo "checked='checked'";
                            }
                            ?>></p></div>
                    <div class="col-md-3"> 
                        <p><img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/u121.png"  height="40" width="40"></p>
                        <p class="pcenter"> <input name="Wholesaler[m_type_3]" id="Wholesaler_m_type_3" value="1" type="checkbox" <?php
                            if (@$model->m_type_3) {
                                echo "checked='checked'";
                            }
                            ?>> </p> </div> 
                </div>
            </div></div>
        <div class="col-md-5">
            <div class="form-group">
                <div class="col-sm-9">
                    <p>Dokument</p>
                    <div class="fileUpload">
                        <img src="<?php echo Yii::app()->theme->baseUrl; ?>/images/u132.png"  height="40" width="40">
                        <input class="upload" id="ytWholesaler_image_file" value="" name="Wholesaler[image_file]" type="hidden">
                        <input class="form-control upload" placeholder="Bekannt-machung" name="Wholesaler[image_file]" id="Wholesaler_image_file" type="file">
                    </div>

                    <div class="help-block error" id="Wholesaler_image_file_em_" style="display:none"></div></div></div>
        </div>
    </div>
    <p>&nbsp;</p>
    <div class="row">
        <div class="col-md-6"> 
            &nbsp;
        </div>
        <div class="col-md-6">
            <div class="col-md-1">
                Ja
            </div>
            <div class="col-md-1">
                Nein
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            Der Schlachter ist ein bekennender Muslim?
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-1">
                    <p class="pcenter">  <input id="ytWholesaler_q_1" value="" name="Wholesaler[q_1]" type="hidden">
                        <span id="Wholesaler_q_1">
                            <label class="radio">
                                <input placeholder="Q 1" id="Wholesaler_q_1_0" value="0" <?php
                            if (@$model->q_1==0) {
                                echo "checked='checked'";
                            }
                            ?> name="Wholesaler[q_1]" type="radio">
                            </label>
                        </span>
                    </p>
                </div>
                <div class="col-md-1">
                    <p class="pcenter">
                        <label class="radio">
                            <input placeholder="Q 1" id="Wholesaler_q_1_1" value="1" <?php
                            if (@$model->q_1) {
                                echo "checked='checked'";
                            }
                            ?>  name="Wholesaler[q_1]" type="radio">
                        </label>
                    <div class="help-block error" id="Wholesaler_q_1_em_" style="display:none">

                    </div>
                    
                    </p>

                </div>

            </div>
        </div>
    </div> 
    <div class="row">
        <div class="col-md-6"> 
            Beim Schlachten wird bei jedem Vorgang <br>im Namen Allahs geschlachtet?        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-1">
                    <p class="pcenter"> 
                        <input id="ytWholesaler_q_1" value="" name="Wholesaler[q_2]" type="hidden">
                        <span id="Wholesaler_q_1">
                            <label class="radio">
                                <input placeholder="Q 2" id="Wholesaler_q_2_0" value="0" <?php
                            if (@$model->q_2==0) {
                                echo "checked='checked'";
                            }
                            ?>  name="Wholesaler[q_2]" type="radio" class="hidden_check"></label></span></p></div>
                <div class="col-md-1"><p class="pcenter"><label class="radio"><input class="hidden_check" placeholder="Q 2" id="Wholesaler_q_2_1" value="1" name="Wholesaler[q_2]" type="radio" <?php
                            if (@$model->q_2) {
                                echo "checked='checked'";
                            }
                            ?> ></label>
                    </span><div class="help-block error" id="Wholesaler_q_2_em_" style="display:none"></p></div></div></div>
        </div></div>

    <div class="row">
        <div class="col-md-6"> 
            Beim Schlachten wird eine Betäubung<br>durch Stromschlag und / oder Schlagbolzen            vorgenommen?        </div>
        <div class="col-md-6">
            <div class="form-group">
                <div class="col-md-1"><p class="pcenter"><input id="ytWholesaler_q_3" value="" name="Wholesaler[q_3]" type="hidden"><span id="Wholesaler_q_3"><label class="radio"><input placeholder="Q 3" id="Wholesaler_q_3_0" value="0" <?php
                            if (@$model->q_3==0) {
                                echo "checked='checked'";
                            }
                            ?>  name="Wholesaler[q_3]" type="radio"></p></label></div>
                <div class="col-md-1"><p class="pcenter"><label class="radio"><input placeholder="Q 3" id="Wholesaler_q_3_1" value="1" <?php
                            if (@$model->q_3) {
                                echo "checked='checked'";
                            }
                            ?>  name="Wholesaler[q_3]" type="radio"></label></span><div class="help-block error" id="Wholesaler_q_3_em_" style="display:none"></p></div></div></div></div>
    </div>
    <div class="row">
        <div class="col-md-6"> 
            Das Geflügel wird bei der Federentfernung<br> im Warmwasser behandelt?        </div>
        <div class="col-md-6">
            <div class="form-group"><div class="col-md-1"><p class="pcenter"><input id="ytWholesaler_q_4" value="" name="Wholesaler[q_4]" type="hidden"><span id="Wholesaler_q_4"><label class="radio"><input <?php
                            if (@$model->q_4==0) {
                                echo "checked='checked'";
                            }
                            ?> placeholder="Q 4" id="Wholesaler_q_4_0" value="0" checked="checked" name="Wholesaler[q_4]" type="radio"></label></p></div>
                <div class="col-md-1"><p class="pcenter"><label class="radio"><input placeholder="Q 4" id="Wholesaler_q_4_1" value="1" <?php
                            if (@$model->q_4) {
                                echo "checked='checked'";
                            }
                            ?>  name="Wholesaler[q_4]" type="radio"></label></span><div class="help-block error" id="Wholesaler_q_4_em_" style="display:none"></p></div></div></div></div>
    </div>
</div>
<div class="row">
    <div class="col-md-6"> 
        Wenn es im Warmenwasser bearbeitet wird;<br> wie hoch ist die Temperatur?        </div>
    <div class="col-md-6">
        <div class="col-md-6">
            <?php echo $form->textFieldGroup($model, 'temp', array('labelOptions' => array("label" => false), 'class' => 'form-control', 'maxlength' => 256)); ?> ℃
        </div> </div> 
</div>
<p>&nbsp;</p>
<div class="form-group">
    <?php
    $this->widget('booster.widgets.TbButton', array(
        'buttonType' => 'submit',
        'label' => 'Save',
        'context' => 'success',
    ));
    ?>
</div>
<?php $this->endWidget(); ?>
</div>
<!-- form code ends here -->