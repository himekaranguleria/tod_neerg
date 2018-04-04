<?php
$this->breadcrumbs = array(
    $model->label(2) => array('index'),
    Yii::t('app', 'Manage'),
);
?>
<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <section class="content-header pull-left">
                        <h1><?php echo GxHtml::encode($model->label(2)); ?></h1>
                    </section> 


                    <?php
                    $this->widget('booster.widgets.TbMenu', array(
                        'type' => 'navbar',
                        'items' => $this->actions,
                        'htmlOptions' => array('class' => 'pull-right btn-group'),
                    ));
                    ?>
                </div>    <div class="box-body">

                    <div class="table-outer">

                        <?php
                        $this->widget('booster.widgets.TbGridView', array(
                            'id' => 'retailer-grid',
                            'type' => 'striped bordered condensed',
                            'dataProvider' => $model->search(),
                            'filter' => $model,
                            'columns' => array(
//                    		'id',
                                'name',
                                'address',
                                array(
                                    //the header of the column
                                    'name' => 'type_id',
                                    'filter' => false,
                                    //make sure that the below text will be displayed as html
                                    'type' => 'raw',
                                    //make a logic decision: if 'anAttribute' value for each data-row is in a region values choose the first icon. Otherwise choose another one
                                    'value' => '(@$data->type_id) ? "<img src=\"/themes/basic/images/u77.png\">":"<img src=\"/themes/basic/images/u76.png\">" ',
                                ),
                                
                                 array(
                                    //the header of the column
                                    'name' => 'state_id',
                                    'filter' => false,
                                    //make sure that the below text will be displayed as html
                                    'type' => 'raw',
                                    //make a logic decision: if 'anAttribute' value for each data-row is in a region values choose the first icon. Otherwise choose another one
                                    'value' => '(@$data->state_id) ? "<img src=\"/themes/basic/images/u77.png\">":"<img src=\"/themes/basic/images/u76.png\">" ',
                                ),
                               
                                array(
                                    'header' => 'Detail',
                                    'class' => 'CButtonColumn',
                                    'template' => '{update}',
                                    'buttons' => array(
                                        'update' => array(
                                            'url' => 'Yii::app()->controller->createUrl("retailer/update",array( "id"=>$data->id))'
                                        ),
                                    ),
                                ),
                                array(
                                    'header' => 'Löschen',
                                    'class' => 'CButtonColumn',
                                    'template' => '{delete}',
                                    'buttons' => array(
                                        'update' => array(
                                            'url' => 'Yii::app()->controller->createUrl("user/delete",array( "id"=>$data->id))'
                                        ),
                                    ),
                                ),
//                                'data_dn',
//		'street',
//		'city',
                            /*
                              'zip_code',
                              'phone_no',
                              'fax_no',
                              'mobile_no',
                              'image_file',

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
//                                array(
//                                    'class' => 'booster.widgets.TbButtonColumn',
//                                    'htmlOptions' => array('nowrap' => 'nowrap'),
//                                ),
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
