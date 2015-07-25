<?php
/* @var $this yii\web\View */
$this->title = '';



if(isset($posts)){
    foreach ($posts as $post) {
        echo $post['content'];
        echo '<br>';
    }
}
?>

