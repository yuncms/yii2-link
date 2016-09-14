<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace yuncms\link\widgets;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yuncms\link\models\Link;

/**
 * Class LinkWidget
 * ````
 * <?= \yuncms\link\widgets\LinkWidget::widget(['limit'=>10,'cache'=>3600,'type'=>1]); ?>
 * ````
 * @package yuncms\link
 */
class LinkWidget extends Widget
{
    /**
     * @var int 需要显示的数量
     */
    public $limit = 10;

    /**
     * @var int 缓存时间
     */
    public $cache = 600;

    public $type;

    /** @inheritdoc */
    public function init()
    {
        parent::init();
        if (empty ($this->limit)) {
            throw new InvalidConfigException ('The "limit" property must be set.');
        }
    }

    /** @inheritdoc */
    public function run()
    {
        $links = Link::getDb()->cache(function ($db) {
            return Link::find()->orderBy(['sort' => SORT_DESC])->limit($this->limit)->all();
        }, $this->cache);
        return $this->render('link', [
            'links' => $links,
        ]);
    }
}