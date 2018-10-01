<?php
namespace app\assets;

use yii\web\AssetBundle;

class SliderRevolutionAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'web/plugins/rs-plugin/css/slider-revolution.css',
    ];
    public $js = [
        'web/plugins/rs-plugin/js/jquery.themepunch.tools.min.js',
        'web/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}