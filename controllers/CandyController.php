<?php

namespace app\controllers;
use Yii;
use yii\web\Controller;
use app\models\UpdateForm;

class CandyController extends Controller{
    public function actionIndex(){
       return $this->render('index');
    }

    public function actionAdd(){
        return "ADDD!!!!";
    }

    public function actionView($id, $page=1){
        var_dump($id);
        var_dump($page);
    }

    public function actionUpdate()
    {
        $model = new UpdateForm();
//        if ($model->load(Yii::$app->request->post())) {
//            return ;
//        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

}