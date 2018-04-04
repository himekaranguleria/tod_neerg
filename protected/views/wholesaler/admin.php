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
                            'id' => 'wholesaler-grid',
                            'type' => 'striped bordered condensed',
                            'dataProvider' => $model->search(),
                            'filter' => $model,
                            'columns' => array(
//                    		'id',
                                'name',
                                'address',
                                array(
                                    'name' => 'create_time',
                                    'filter' => false,
                                ),
//		'street',
//		'city',
//		'zip_code',
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
//                                array(
//                                    'class' => 'booster.widgets.TbButtonColumn',
//                                    'htmlOptions' => array('nowrap' => 'nowrap'),
//                                ),
                               array(
                                    //the header of the column
                                    'name' => 'image_file',
                                    'filter' => false,
                                    //make sure that the below text will be displayed as html
                                    'type' => 'raw',
                                    //make a logic decision: if 'anAttribute' value for each data-row is in a region values choose the first icon. Otherwise choose another one
                                    'value' => '(@$data->image_file) ? "<img src=\"/themes/basic/images/delete.png\">" : ""',
                                ),
                                array(
                                    'header' => 'Detail',
                                    'class' => 'CButtonColumn',
                                    'template' => '{update}',
                                    'buttons' => array(
                                        'update' => array(
                                            'url' => 'Yii::app()->controller->createUrl("wholesaler/update",array( "id"=>$data->id))'
                                        ),
                                    ),
                                ),
                                array(
                                    'header' => 'Löschen',
                                    'class' => 'CButtonColumn',
                                    'template' => '{delete}',
                                    'buttons' => array(
                                        'update' => array(
                                            'url' => 'Yii::app()->controller->createUrl("wholesaler/delete",array( "id"=>$data->id))'
                                        ),
                                    ),
                                )
                            ),
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
