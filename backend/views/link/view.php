<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use xutl\inspinia\Box;
use xutl\inspinia\Toolbar;
use xutl\inspinia\Alert;

/* @var $this yii\web\View */
/* @var $model yuncms\link\models\Link */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('link', 'Manage Link'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 link-view">
            <?= Alert::widget() ?>
            <?php Box::begin([
                'header' => Html::encode($this->title),
            ]); ?>
            <div class="row">
                <div class="col-sm-4 m-b-xs">
                    <?= Toolbar::widget(['items' => [
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
                    ]]); ?>
                </div>
                <div class="col-sm-8 m-b-xs">

                </div>
            </div>
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
                    'logo:image',
                    [
                        'attribute' => 'user.nickname',
                        'label' => Yii::t('link', 'User'),
                    ],
                    'created_at:datetime',
                    'updated_at:datetime',
                ],
            ]) ?>
            <?php Box::end(); ?>
        </div>
    </div>
</div>