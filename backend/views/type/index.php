<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use xutl\inspinia\Box;
use xutl\inspinia\Toolbar;
use xutl\inspinia\Alert;
/* @var $this yii\web\View */
/* @var $searchModel yuncms\system\backend\models\TypeSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('link', 'Manage Type');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12 type-index">
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
                            'url' => ['/link/link/index'],
                        ],
                        [
                            'label' => Yii::t('link', 'Manage Type'),
                            'url' => ['/link/type/index'],
                        ],
                        [
                            'label' => Yii::t('link', 'Create Type'),
                            'url' => ['/link/type/create'],
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
                    'name',
                    'parent',
                    'module',
                    ['class' => 'yii\grid\ActionColumn', 'header' => Yii::t('app', 'Operation'),],
                ],
            ]); ?>
            <?php Box::end(); ?>
            <?php Pjax::end(); ?>
        </div>
    </div>
</div>
