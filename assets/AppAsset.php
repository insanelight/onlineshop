<?php
namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/youplay.min.css',
        'css/style.css'
    ];
    public $js = [
        'js/jquery.hexagonprogress.min.js',
        'js/SmoothScroll.js',
        'js/youplay.min.js',
        'js/jarallax.min.js',
        'js/script.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
}
