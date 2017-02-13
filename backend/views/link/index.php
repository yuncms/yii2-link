<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use yuncms\admin\widgets\Jarvis;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('link', 'Manage Link');
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-index">
            <?php Pjax::begin(); ?>                
            <?php Jarvis::begin([
                'noPadding' => true,
                'editbutton' => false,
                'deletebutton' => false,
                'header' => Html::encode($this->title),
                'bodyToolbarActions' => [
                    [
                        'label' => Yii::t('link', 'Manage Link'),
                        'url' => ['index'],
                    ],
                    [
                        'label' => Yii::t('link', 'Manage Type'),
                        'url' => ['/link/type/index'],
                    ],
                    [
                        'label' => Yii::t('link', 'Create Link'),
                        'url' => ['create'],
                    ],
                ]
            ]); ?>
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    [
                        'attribute' => 'type.name',
                        'label' => Yii::t('link', 'Type'),
                    ],
                    'name',
                    'description',
                    'url:url',
                    // 'logo',
                    [
                        'attribute' => 'user.username',
                        'label' => Yii::t('link', 'User'),
                    ],
                    // 'created_at',
                    // 'updated_at',
                    ['class' => 'yii\grid\ActionColumn','header' => Yii::t('app', 'Operation'),],
                ],
            ]); ?>
            <?php Jarvis::end(); ?>
            <?php Pjax::end(); ?>
        </article>
    </div>
</section>
