<?php
namespace app\assets;

use yii\web\AssetBundle;
use yii\web\JqueryAsset;
use yii\jui\JuiAsset;
use yii\bootstrap5\BootstrapAsset;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    
    public $css = [
        'css/site.css',
    ];
    
    public $js = [
        // Здесь можно подключить ваши JavaScript файлы, если нужно
    ];
    
    public $depends = [
        'yii\web\YiiAsset', // Базовый Yii Asset
        BootstrapAsset::class, // Bootstrap 5
        JqueryAsset::class, // jQuery
        JuiAsset::class, // jQuery UI
    ];
}
