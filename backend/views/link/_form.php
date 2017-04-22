<?php
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
use yuncms\system\models\Type;

/* @var \yii\web\View $this */
/* @var yuncms\link\models\Link $model */
/* @var ActiveForm $form */
?>
<?php $form = ActiveForm::begin(['layout' => 'horizontal', 'enableAjaxValidation' => true, 'enableClientValidation' => true,]); ?>

<?= $form->field($model, 'type_id')
    ->dropDownList(ArrayHelper::map(Type::find()->where(['module' => 'link'])->asArray()->all(), 'id', 'name'), ['prompt' => '请选择',
    ]) ?>
<div class="hr-line-dashed"></div>
<?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>
<div class="hr-line-dashed"></div>
<?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>
<div class="hr-line-dashed"></div>
<?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
<div class="hr-line-dashed"></div>
<?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>
<div class="hr-line-dashed"></div>

<div class="form-group">
    <div class="col-sm-4 col-sm-offset-2">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>


<?php ActiveForm::end(); ?>

