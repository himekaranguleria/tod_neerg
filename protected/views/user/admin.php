

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <section class="content-header">
    <h1>
        <?php echo  GxHtml::encode($model->label(2)); ?>
    </h1>
</section>
            <?php
                $this->widget('booster.widgets.TbMenu', array(
                    'type' => 'navbar',
                    'items' => $this->actions,
                    'htmlOptions' => array(
                        'class' => 'pull-right btn-group'
                    )
                ));
                ?>
                <div class="box-body">
                    <div class="table-outer">
                        <?php
                        $this->widget('booster.widgets.TbGridView', array(
                            'id' => 'user-grid',
                            'type' => 'striped bordered condensed',
                            'dataProvider' => $model->searchuser(),
                            'selectionChanged' => "function(id){window.location='" . Yii::app()->createAbsoluteUrl('user/view') . "/' + $.fn.yiiGridView.getSelection(id);}",
                            'filter' => $model,
                            'emptyText' => 'No Result Found',
                            'columns' => array(
//                                'id',
                                'first_name',
                                'email',
                                 array(
                                    'name' => 'create_time',
                                     'filter' => false,
                                ),
                                
                                array(
                                    'header' => 'Passwort zurücksetzen',
                                    'class' => 'CButtonColumn',
                                    'template' => '{update}',
                                    'buttons' => array(
                                        'update' => array(
                                            'url' => 'Yii::app()->controller->createUrl("user/resetpassword",array( "id"=>$data->id))'
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
                                )
                            )
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
