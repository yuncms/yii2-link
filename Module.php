<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace yuncms\link;

use Yii;
use yuncms\link\models\Link;

/**
 * Class Module
 * @package yuncms\link
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'yuncms\link\controllers';

    public function init()
    {
        parent::init();
        /**
         * 注册语言包
         */
        if (!isset(Yii::$app->i18n->translations['link*'])) {
            Yii::$app->i18n->translations['link*'] = [
                'class' => 'yii\i18n\PhpMessageSource',
                'sourceLanguage' => 'en-US',
                'basePath' => __DIR__ . '/messages',
            ];
        }
    }

    /**
     * 获取连接
     * @param $type
     * @param bool $isLogo
     * @param int $limit
     * @return array|models\Link[]
     */
    public static function getLinks($type, $isLogo = false, $limit = 10)
    {
        $query = Link::find()->where(['type' => $type]);
        if ($isLogo) {
            $query->andWhere(['not', 'logo', null]);
        }
        $query->orderBy(['frequency' => SORT_DESC])->limit($limit);
        return $query->all();
    }
}