<?php
/**
 * @link http://www.tintsoft.com/
 * @copyright Copyright (c) 2012 TintSoft Technology Co. Ltd.
 * @license http://www.tintsoft.com/license/
 */
namespace yuncms\link\controllers;

use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yuncms\models\Link;

/**
 * Class DefaultController
 * @package yuncms\link
 */
class DefaultController extends Controller
{

    
    public function actionIndex()
    {

    }

    /**
     * @param int $id
     */
    public function actionView($id){

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