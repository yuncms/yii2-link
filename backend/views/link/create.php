<?php

use yii\helpers\Html;
use xutl\inspinia\Box;
use xutl\inspinia\Toolbar;
use xutl\inspinia\Alert;

/* @var $this yii\web\View */
/* @var $model yuncms\link\models\Link */

$this->title = Yii::t('link', 'Create Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('link', 'Manage Link'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-create">
            <?= Alert::widget() ?>
            <?php Box::begin([

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
                ]
            ]); ?>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            <?php Box::end(); ?>
        </div>
    </div>
</div>
