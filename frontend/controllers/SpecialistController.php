<?php

namespace frontend\controllers;

class SpecialistController extends \yii\web\Controller
{
    public function actionAllspecialist()
    {
        return $this->render('allspecialist');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionView()
    {
        return $this->render('view');
    }

}
