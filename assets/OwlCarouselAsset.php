<?php
namespace app\assets;

use yii\web\AssetBundle;

class OwlCarouselAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/owl.carousel.min.css',
    ];
    public $js = [
        'js/owl.carousel.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}