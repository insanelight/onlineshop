<?php
namespace app\assets;

use yii\web\AssetBundle;

class SweetAlertAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/sweet-alert.css',
    ];
    public $js = [
        'js/sweet-alert.min.js',
        'js/validator.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}