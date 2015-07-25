<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
//        'css/site.css',
        'css/bootstrap.css',
        'css/style.css',
        'css/swipebox.css',
        'css/touchTouch.css',
//        'css/',
    ];
    public $js = [
        'js/bootstrap.js',
        'js/easing.js',
        'js/jquery-1.11.1.min.js',
        'js/jquery.fancybox.js',
        'js/jquery.swipebox.min.js',
        'js/move-top.js',
        'js/responsiveslides.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
