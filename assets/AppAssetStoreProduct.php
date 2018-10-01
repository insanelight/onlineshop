<?php
namespace app\assets;


use yii\web\AssetBundle;

class AppAssetStore extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/social-likes_flat.css'
    ];
    public $js = [
        'js/social-likes.min.js',
    ];
    public $depends = [
        'app\assets\AppAsset',
    ];
}