<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

//Правка 1: подключил модель
use app\models\Message;

use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class MessageController extends Controller
{
    public function actionIndex()
    {
        //return Message::find()->all();
        return "Hello message!";
    }

    //Правка 2: изменил название метода на стандартное - начинается с action,
    //вызывать в адресной строке так: http://localhost/?r=message/get-messages
    public function actionGetMessages()
    {
        //Правка 3: включил тип ответа - JSON
        \Yii::$app->response->format = \yii\web\Response:: FORMAT_JSON;
        return Message::find()->all();
       // return "Hello message2!";
    }
}
