<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Book */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="book-form">

    <?php $form = ActiveForm::begin([
        'fieldConfig' => [
            'template' => '{label}<div class="col-lg-5">{input}</div><div class="col-lg-4">{error}</div>',
            'inputOptions' => ['class' => 'form-control'],
            'labelOptions' => ['class' => 'control-label col-lg-3']
        ],
        'options' => [
            'class' => 'form-horizontal'
        ]
    ]); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'translator')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publisher')->textInput(['maxlength' => true]) ?>

    <?//= $form->field($model, 'published_at')->textInput() ?>

    <?php
        echo $form->field($model, 'published_at')->widget('tangniyuqi\laydate\LayDate', [
            'format' => 'Y-m-d',
            'clientOptions' => [
                'type' => 'date', //see http://www.layui.com/doc/modules/laydate.html#type
                'format' => 'yyyy-MM-dd', //see http://www.layui.com/doc/modules/laydate.html#format
            ]
        ]);
    ?>

    <?= $form->field($model, 'isbn')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'book_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'total_num')->textInput() ?>

    <?= $form->field($model, 'available_num')->textInput() ?>

    <?= $form->field($model, 'reserve_num')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('保存', ['class' => 'btn btn-success col-lg-offset-5']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
