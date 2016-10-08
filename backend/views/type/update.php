<?php

use backend\helpers\Html;
use backend\widgets\Jarvis;

/* @var $this yii\web\View */
/* @var $model common\models\Type */

$this->title = Yii::t('backend/link', 'Update Type') . ': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend/link', 'Manage Type'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 type-update">
            <?php Jarvis::begin([
                'editbutton' => false,
                'deletebutton' => false,
                'header' => Html::encode($this->title),
                'bodyToolbarActions' => [
                    [
                        'label' => Yii::t('backend/type', 'Manage Type'),
                        'url' => ['/link/type/index'],
                    ],
                    [
                        'label' => Yii::t('backend/type', 'Create Type'),
                        'url' => ['/link/type/create'],
                    ],
                ]
            ]); ?>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            <?php Jarvis::end(); ?>
        </article>
    </div>
</section>