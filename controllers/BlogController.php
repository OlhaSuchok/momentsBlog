<?php

namespace app\controllers;
use yii\web\Controller;

class BlogController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
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