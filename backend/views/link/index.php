<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use xutl\inspinia\Box;
use xutl\inspinia\Toolbar;
use xutl\inspinia\Alert;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\LinkSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('link', 'Manage Link');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 link-index">
           <?= Alert::widget() ?>
            <?php Pjax::begin(); ?>
            <?php Box::begin([
                'header' => Html::encode($this->title),
            ]); ?>
            <div class="row">
                <div class="col-sm-4 m-b-xs">
                    <?= Toolbar::widget(['items' => [
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
                    ]]); ?>
                </div>
                <div class="col-sm-8 m-b-xs">
                    <?php echo $this->render('_search', ['model' => $searchModel]); ?>
                </div>
            </div>

            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'options' => ['id' => 'gridview'],
                'layout' => "{items}\n{summary}\n{pager}",
                //'filterModel' => $searchModel,
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
            <?php Box::end(); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
