<?php
use xutl\inspinia\ActiveForm;
use yii\helpers\Html;

/* @var \yii\web\View $this */
/* @var yuncms\system\models\Type $model */
/* @var ActiveForm $form */
?>
<?php $form = ActiveForm::begin(['layout' => 'horizontal', 'enableAjaxValidation' => true, 'enableClientValidation' => false,]); ?>


    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
<div class="hr-line-dashed"></div>
    <?= $form->field($model, 'parent')->textInput() ?>
<div class="hr-line-dashed"></div>

<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>


<?php ActiveForm::end(); ?>

