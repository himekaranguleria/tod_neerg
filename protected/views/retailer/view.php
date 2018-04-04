



<!--<div class="page-header">-->
<!--<h1> echo GxHtml::encode(GxHtml::valueEx($model)); ?></h1>-->
<!--</div>-->

<div class="content">

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <section class="content-header pull-left">

                        <h1><?php  echo ucfirst(GxHtml::encode(GxHtml::valueEx($model))); ?></h1>
                    </section>

                    <?php   $this->widget('booster.widgets.TbMenu', array(
                    'type' => 'navbar',
                    'items'=>$this->actions,
                    'htmlOptions'=>array('class'=> 'pull-right btn-group'),
                    ));
                    ?>
                </div>
                <div class="box-body">

                    <div class="table-outer">
                        <?php $this->widget('booster.widgets.TbDetailView', array(
                        'data' => $model,
                        'attributes' => array(
                        'id',
'name',
'data_dn',
'address',
'street',
'city',
'zip_code',
'phone_no',
'fax_no',
'mobile_no',
'image_file',
array(
				'name' => 'm_type_1',
				'type' => 'raw',
				'value'=>$model->getTypeOptions($model->m_type_1),
				),
'm_weight_1',
array(
				'name' => 'm_type_2',
				'type' => 'raw',
				'value'=>$model->getTypeOptions($model->m_type_2),
				),
'm_weight_2',
array(
				'name' => 'm_type_3',
				'type' => 'raw',
				'value'=>$model->getTypeOptions($model->m_type_3),
				),
'm_weight_3',
array(
			'name' => 'wholeseler',
			'type' => 'raw',
			'value' => $model->wholeseler !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->wholeseler)), array('wholesaler/view', 'id' => GxActiveRecord::extractPkValue($model->wholeseler, true))) : null,
			),
array(
				'name' => 'state_id',
				'type' => 'raw',
				'value'=>$model->getStatusOptions($model->state_id),
				),
array(
				'name' => 'type_id',
				'type' => 'raw',
				'value'=>$model->getTypeOptions($model->type_id),
				),
'create_time:datetime',
'update_time:datetime',
array(
			'name' => 'createUser',
			'type' => 'raw',
			'value' => $model->createUser !== null ? GxHtml::link(GxHtml::encode(GxHtml::valueEx($model->createUser)), array('user/view', 'id' => GxActiveRecord::extractPkValue($model->createUser, true))) : null,
			),
                        ),
                        )); ?>

                                                                                                
<?php   $this->widget('CommentPortlet', array(
                        'model' => $model,
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>