<!--  form code start here -->
<div class="form ">


    <?php
    $form = $this->beginWidget('booster.widgets.TbActiveForm', array(
        'id' => 'user-form',
        'type' => 'horizontal',
        'enableAjaxValidation' => true,
        'htmlOptions' => array('enctype' => 'multipart/form-data'),
    ));
    ?>
    <?php echo $form->errorSummary($model); ?>
    <div class="row">
        <div class="col-md-6">
            <div class="panel panel-info">

            </div>
            <?php echo $form->textFieldGroup($model, 'first_name', array('class' => 'form-control', 'maxlength' => 512, 'placeHolder' => 'User Name')); ?>
            <?php echo $form->textFieldGroup($model, 'address', array('class' => 'form-control', 'maxlength' => 512, 'placeHolder' => 'address')); ?>
            <?php echo $form->textFieldGroup($model, 'zip_code', array('class' => 'form-control', 'maxlength' => 512, 'placeHolder' => 'Password')); ?>
        </div>
        <div class="col-md-6">
            <div class="panel panel-info">
            </div>
            <?php echo $form->textFieldGroup($model, 'email', array('class' => 'form-control', 'maxlength' => 128, 'placeHolder' => 'Email')); ?>
            <?php echo $form->textFieldGroup($model, 'phone_no', array('class' => 'form-control', 'maxlength' => 512, 'placeHolder' => 'Phone Number')); ?>
            <?php echo $form->textFieldGroup($model, 'city', array('class' => 'form-control', 'maxlength' => 512, 'placeHolder' => 'Password')); ?>
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-block  btn-success" id="yw1" type="submit" name="yt0">Add wholesaler</button>
    </div>
    <?php $this->endWidget(); ?>

</div>
<!-- form code ends here -->
<script>
    $(document).ready(function () {
//        $('#User_maker').on('blur', function (e) {
//            alert("as");
//        });
    });

</script>