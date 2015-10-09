<?php
/**
 *
 * @author Saranga Abeykoon <amisaranga@gmail.com>
 * @link http://nterms.com/
 * @copyright Copyright (c) 2015 Saranga Abeykoon
 * @license MIT
 */
namespace nterms\yii2-redactor-charts;

use yii\web\AssetBundle;

class ChartsRedactorPluginAsset extends AssetBundle
{
    public $sourcePath = '@bower/redactor-charts';
    public $depends = [
        'nterms\yii2-redactor-charts\ChartjsAsset',
    ];

    public function init()
    {
        $this->js = YII_DEBUG ? ['charts.js'] : ['charts.js'];
    }
}

