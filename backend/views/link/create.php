<?php

use yii\helpers\Html;
use yuncms\admin\widgets\Jarvis;

/* @var $this yii\web\View */
/* @var $model yuncms\link\models\Link */

$this->title = Yii::t('link', 'Create Link');
$this->params['breadcrumbs'][] = ['label' => Yii::t('link', 'Manage Link'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 link-create">
            <?php Jarvis::begin([
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
                ]
            ]); ?>

            <?= $this->render('_form', [
                'model' => $model,
            ]) ?>
            <?php Jarvis::end(); ?>
        </article>
    </div>
</section>
