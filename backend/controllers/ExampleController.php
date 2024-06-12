<?php

namespace backend\controllers;

use yii\web\Controller;

class ExampleController extends Controller
{
    public function actionIndex(): string
    {
        return $this->render('index');
    }
}