<?php
namespace app\models;
use yii\db\ActiveRecord;
use yii\helpers\HtmlPurifier;
class Message extends ActiveRecord
{
    public $name;
    public $message;
    public $email;
    public $date;

    public static function tableName()
    {
        return 'messages';
    }
}