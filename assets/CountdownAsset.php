<?php
namespace app\assets;

use yii\web\AssetBundle;

class CountdownAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/jquery.countdown.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}