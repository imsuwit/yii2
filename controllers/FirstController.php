<?php

namespace app\controllers;

class FirstController extends \yii\web\Controller {

    public function actionIndex() {
        return $this->render('index');
    }

    public function actionPage1() {
        return $this->render('page1');
    }

    public function actionPage2() {
        //ส่งค่าตัวแปร >> page2
        $hello ="Hello World";
        $a = 5;
        $b =3;
        return $this->render('page2',[
            'hello'=>$hello,
             'x'=>$a   ,
            'b'=>$b   ,
            'c'=>$a+$b
                ]);
    }
    public function actionPage3() {
        return $this->render('page3');
    }
}
