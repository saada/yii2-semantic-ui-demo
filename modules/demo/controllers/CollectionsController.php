<?php

namespace app\modules\demo\controllers;

use yii\web\Controller;

class CollectionsController extends Controller {


    public function actionIndex() {

        return $this->render('index');
    }
}
