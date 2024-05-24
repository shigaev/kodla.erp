<?php

namespace backend\assets;

use yii\web\AssetBundle;

class ViteAppAsset extends AssetBundle
{
    public $sourcePath = '@backendApp/dist/assets/';
    public $css = [
        'main.css',
    ];
    public $js = [
        'main.js',
    ];
}