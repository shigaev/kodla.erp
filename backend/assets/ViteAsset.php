<?php

namespace backend\assets;

use Exception;
use Yii;
use yii\helpers\ArrayHelper;
use yii\web\AssetBundle;

class ViteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [];
    public $js = [];

    /**
     * @throws Exception
     */
    public function init()
    {
        parent::init();
        $manifest = $this->loadManifest();
        $buildAssetsPath = 'build/';

        $css = ArrayHelper::getValue($manifest['main.js'], 'css');
        $js = ArrayHelper::getValue($manifest['main.js'], 'file');

        $this->css[] = $buildAssetsPath . ArrayHelper::getValue($css, function ($cssItem) {
                foreach ($cssItem as $file) {
                    return $file;
                }
                return null;
            });
        $this->js[] = $buildAssetsPath . $js;
    }

    private function loadManifest()
    {
        $manifest = Yii::getAlias('@backend/web/build/.vite/manifest.json');
        if (file_exists($manifest)) {
            return json_decode(file_get_contents($manifest), true);
        }
        return null;
    }
}