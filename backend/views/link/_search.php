<?php

use yii\helpers\Html;
use xutl\inspinia\ActiveForm;

/* @var $this yii\web\View */
/* @var $model yuncms\link\models\LinkSearch */
/* @var $form ActiveForm */
?>

<div class="link-search pull-right">

    <?php $form = ActiveForm::begin([
        'layout' => 'inline',
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id', [
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('id'),
        ],
    ]) ?>

    <?= $form->field($model, 'type_id', [
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('id'),
        ],
    ]) ?>

    <?= $form->field($model, 'name', [
        'inputOptions' => [
            'placeholder' => $model->getAttributeLabel('id'),
        ],
    ]) ?>

    <?php // echo  $form->field($model, 'description') ?>

    <?php // echo  $form->field($model, 'url') ?>

    <?php // echo $form->field($model, 'logo') ?>

    <?php // echo $form->field($model, 'admin_id') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
