<?php

namespace app\controllers;

use app\models\SubscribeForm;
use Yii;
use yii\web\Controller;

class BlogController extends Controller
{

    public function actionIndex()
    {
        $model = new SubscribeForm();

        if ($model->load(Yii::$app->request->post()) && $model->validate()) {
            return $this->render('subscribe-confirm', ['model' => $model]);
        } else {
            return $this->render('index', ['model' => $model]);
        }
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionServices()
    {
        return $this->render('services');
    }

    public function actionFaq()
    {
        return $this->render('faq');
    }

    public function actionContacts()
    {
        return $this->render('contacts');
    }

}