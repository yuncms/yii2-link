<?php

use yii\helpers\Html;
use xutl\inspinia\Box;
use xutl\inspinia\Toolbar;
use xutl\inspinia\Alert;

/* @var $this yii\web\View */
/* @var $model yuncms\system\models\Type */

$this->title = Yii::t('link', 'Update Type') . ': ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('link', 'Manage Type'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 type-update">
            <?= Alert::widget() ?>
            <?php Box::begin([

                'header' => Html::encode($this->title),
                'bodyToolbarActions' => [
                    [
                        'label' => Yii::t('link', 'Manage Type'),
                        'url' => ['/link/type/index'],
                    ],
                    [
                        'label' => Yii::t('link', 'Create Type'),
                        'url' => ['/link/type/create'],
                    ],
                ]
            ]); ?>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            <?php Box::end(); ?>
        </div>
    </div>
</div>