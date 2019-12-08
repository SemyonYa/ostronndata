<?php

namespace app\controllers;

use app\models\Reason;
use app\models\Testimonial;
use app\models\Tool;
use app\models\Type;
use yii\helpers\Json;
use yii\web\Controller;


class DataController extends Controller
{
    public $enableCsrfValidation = false;
    public function behaviors()
    {
        return [
            'corsFilter' => [
                'class' => \yii\filters\Cors::className(),
                'cors' => [
                    'Origin' => ['http://localhost:8080', 'http://localhost:8100'],
                    'Access-Control-Allow-Origin' => true,
                    'Access-Control-Allow-Credentials' => true,
                    'Access-Control-Request-Method' => ['POST'],
                    'Access-Control-Allow-Headers' => ['Origin', 'Content-Type', 'X-Auth-Token', 'Authorization']
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionTypes()
    {
        return Json::encode(Type::find()->all());
    }

    public function actionTools($type_id) {
        return Json::encode(Tool::find()->where(['type_id' => $type_id])->all());
    }

    public function actionTestimonials() {
        return Json::encode(Testimonial::find()->where(['is_active' => 1])->all());
    }

    public function actionReasons() {
        return Json::encode(Reason::find()->all());
    }
}
