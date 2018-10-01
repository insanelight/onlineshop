<?php
namespace app\assets;


use yii\web\AssetBundle;

class AppAssetStore extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
    ];
    public $js = [
        'js/imagesloaded.pkgd.min.js',
        'js/isotope.pkgd.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}