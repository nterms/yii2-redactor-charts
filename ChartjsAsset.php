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

/**
 *
 * Chart.js Asset
 */
class ChartjsAsset extends AssetBundle
{
    public $sourcePath = '@bower/chartjs';

    public function init()
    {
        $this->js = YII_DEBUG ? ['Chart.js'] : ['Chart.min.js'];
    }
}
