<?php
use yii\helpers\ArrayHelper;
use yii\bootstrap\ActiveForm;
use backend\helpers\Html;
use common\models\Type;

/* @var \yii\web\View $this */
/* @var yuncms\link\models\Link $model */
/* @var ActiveForm $form */
?>
<?php $form = ActiveForm::begin(['layout' => 'horizontal', 'enableAjaxValidation' => true, 'enableClientValidation' => true,]); ?>
<fieldset>
    <?= $form->field($model, 'type_id')
        ->dropDownList(ArrayHelper::map(Type::find()->where(['module' => 'link'])->asArray()->all(), 'id', 'name'), ['prompt' => '请选择',
        ]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'logo')->textInput(['maxlength' => true]) ?>

</fieldset>
<div class="form-actions">
    <div class="row">
        <div class="col-md-12">
            <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>
    </div>
</div>

<?php ActiveForm::end(); ?>

