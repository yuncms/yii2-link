<?php

use backend\helpers\Html;
use backend\widgets\Jarvis;
use backend\components\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\LinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('backend/link', 'Manage Link');
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
                        'label' => Yii::t('backend/link', 'Manage Link'),
                        'url' => ['/link/link/index'],
                    ],
                    [
                        'label' => Yii::t('backend/type', 'Manage Type'),
                        'url' => ['/link/type/index'],
                    ],
                    [
                        'label' => Yii::t('backend/link', 'Create Link'),
                        'url' => ['/link/link/create'],
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
                    'type_id',
                    'name',
                    'description',
                    'url:url',
                    // 'logo',
                    // 'admin_id',
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
