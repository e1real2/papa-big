<?php
/**
 * Created by PhpStorm.
 * User: Yesbol
 * Date: 11.03.2019
 * Time: 23:57
 */

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class AdminController extends Controller
{
    public function actionIndex() {
        return $this->render('index');
    }
}