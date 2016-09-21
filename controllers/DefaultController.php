<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace yuncms\link\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yuncms\link\models\Link;

/**
 * Class DefaultController
 * @package yuncms\link
 */
class DefaultController extends Controller
{

    /**
     * 连接首页
     */
    public function actionIndex()
    {
        $this->render('index');
    }

    /**
     * 连接跳转
     * @param int $id
     * @return \yii\web\Response
     * @throws NotFoundHttpException
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        return $this->redirect($model->url, 301);
    }

    /**
     * Finds the Link model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Link the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Link::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}