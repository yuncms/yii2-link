<?php

use backend\helpers\Html;
use yii\widgets\DetailView;
use backend\widgets\Jarvis;

/* @var $this yii\web\View */
/* @var $model common\models\Type */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend/link', 'Manage Type'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 type-view">
            <?php Jarvis::begin([
                'noPadding' => true,
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
                    [
                        'label' => Yii::t('backend/type', 'Update Type'),
                        'url' => ['/link/type/update', 'id' => $model->id],
                        'options' => ['class' => 'btn btn-primary btn-sm']
                    ],
                    [
                        'label' => Yii::t('backend/type', 'Delete Type'),
                        'url' => ['/link/type/delete', 'id' => $model->id],
                        'options' => [
                            'class' => 'btn btn-danger btn-sm',
                            'data' => [
                                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                'method' => 'post',
                            ],
                        ]
                    ],
                ]
            ]); ?>
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                    'parent',
                    'module',
                ],
            ]) ?>
            <?php Jarvis::end(); ?>
        </article>
    </div>
</section>