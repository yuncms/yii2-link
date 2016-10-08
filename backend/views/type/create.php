<?php

use backend\helpers\Html;
use backend\widgets\Jarvis;

/* @var $this yii\web\View */
/* @var $model common\models\Type */

$this->title = Yii::t('backend/link', 'Create Type');
$this->params['breadcrumbs'][] = ['label' => Yii::t('backend/link', 'Manage Type'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<section id="widget-grid">
    <div class="row">
        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12 type-create">
            <?php Jarvis::begin([
                'editbutton' => false,
                'deletebutton' => false,
                'header' => Html::encode($this->title),
                'bodyToolbarActions' => [
                    [
                        'label' => Yii::t('backend/link', 'Manage Type'),
                        'url' => ['/type/index','module'=>$module],
                    ],
                    [
                        'label' => Yii::t('backend/link', 'Create Type'),
                        'url' => ['/type/create','module'=>$module],
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
