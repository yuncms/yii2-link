<?php

use yii\helpers\Html;
use yii\helpers\Url;
/**
 * @var \yuncms\link\models\Link $links
 */
?>
<ul class="link-widget-link">
    <?php
    foreach ($links as $link) {
        echo Html::tag('li', Html::a($link->name, $link->url, ['rel' => 'link']));
    }
    ?>
</ul>
