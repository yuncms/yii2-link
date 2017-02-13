<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yuncms\admin\widgets\Jarvis;

/* @var $this yii\web\View */
/* @var $model yuncms\link\models\Link */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('link', 'Manage Link'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-view">
            <?php Jarvis::begin([
                'noPadding' => true,
                'editbutton' => false,
                'deletebutton' => false,
                'header' => Html::encode($this->title),
                'bodyToolbarActions' => [
                    [
                        'label' => Yii::t('link', 'Manage Link'),
                        'url' => ['/link/link/index'],
                    ],
                    [
                        'label' => Yii::t('link', 'Create Link'),
                        'url' => ['/link/link/create'],
                    ],
                    [
                        'label' => Yii::t('link', 'Update Link'),
                        'url' => ['/link/link/update', 'id' => $model->id],
                        'options' => ['class' => 'btn btn-primary btn-sm']
                    ],
                    [
                        'label' => Yii::t('link', 'Delete Link'),
                        'url' => ['/link/link/delete', 'id' => $model->id],
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
                    [
                        'attribute' => 'type.name',
                        'label' => Yii::t('link', 'Type'),
                    ],
                    'name',
                    'description',
                    'url:url',
                    'logo',
                    [
                        'attribute' => 'user.username',
                        'label' => Yii::t('link', 'User'),
                    ],
                    'created_at',
                    'updated_at',
                ],
            ]) ?>
            <?php Jarvis::end(); ?>
        </article>
    </div>
</section>