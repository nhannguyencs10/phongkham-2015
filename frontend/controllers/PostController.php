<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Post;

class PostController extends \yii\web\Controller
{
    public function actionCare()
    {
        $post = new Post();
        
        $intro = $post->getCare();
        $sender['posts'] = $intro;
//        return $this->render('intro',);
        
        
        return $this->render('care',$sender);
    }

    public function actionEquipment()
    {
        return $this->render('equipment');
    }

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionIntro()
    {
        $post = new Post();
        
        $intro = $post->getIntro();
        $sender['post'] = $intro;
        return $this->render('intro',$sender);
    }

}
