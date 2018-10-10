<?php

namespace app\controllers;

class UserController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionHello()
    {
        return $this->asJson(["hello" => "world"]);
    }

}
