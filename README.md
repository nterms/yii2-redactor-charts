yii2-redactor-charts
====================

A Chart.js plugin for Imperavi Redactor WYSIWYG editor. This plugin
enables creating and inserting Bar, Line and Radar type charts to the
content edited with Redactor.


Prerequisites
-------------

This plugin works only on Imperavi Redactor WYSIWYG editor.
You may use Redactor by directly loading `redactor.js` and `redactor.css` or useing some Yii2 extension.
There are few yii2 extensions developed for integrating Redactor with your Yii2 project.
This plugin does not depend on any specific extension. Theoretically it should work with all of those extensions.
Here is a list of yii2-redactor extension I could find. Its up to your choice to use one suits for you.

- [asofter/yii2-imperavi-redactor](https://github.com/asofter/yii2-imperavi-redactor) - Tested
- [yiidoc/yii2-redactor](https://github.com/yiidoc/yii2-redactor)
- [vova07/yii2-imperavi-widget](https://github.com/vova07/yii2-imperavi-widget)

Please find the usage instructions for each of the above extensions below under [Usage](#usage) section.


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist nterms/yii2-redactor-charts "*"
```

or add

```
"nterms/yii2-redactor-charts": "*"
```

to the require section of your `composer.json` file.


Usage <a name="usage"></a>
-----

Register the asset bundle with your view. In case you register the asset bundle in your view file:

~~~php
\nterms\redactor\charts\ChartsRedactorPluginAsset::register($this);
~~~

Now enable the `charts` plugin when you initialize Redactor. In JavaScript:

~~~js
$('#textarea').redactor({
    plugins: ['charts'],
});
~~~


### Use with [asofter/yii2-imperavi-redactor](https://github.com/asofter/yii2-imperavi-redactor) - Tested

Register the `ChartsRedactorPluginAsset` asset bundle as shown above and enable the plugin:

```php
yii\imperavi\Widget::widget([
    'options' => [
        'lang' => 'ru',
    ],
    'plugins' => [
        'charts',
    ]
]);
```

In case the plugin is not loaded. Check the order of the JavaScript files loded on your page.
You can simply set the `charts` plugin related asset files load after the widget assets by adding following to your application configuration.
On your `web.php` add:

```php
'assetManager' => [
    'bundles' => [
        'nterms\redactor\charts\ChartsRedactorPluginAsset' => [
            'depends' => [
                'yii\imperavi\ImperaviRedactorAsset',
            ],
        ],
    ],
],
```

This indicates that `ChartsRedactorPluginAsset` asset bundle depends on asset bundle of the widget, making it load assets in proper order.


### Use with [yiidoc/yii2-redactor](https://github.com/yiidoc/yii2-redactor) - Not tested

Register the `ChartsRedactorPluginAsset` asset bundle as shown above and enable the plugin:

```php
<?= \yii\redactor\widgets\Redactor::widget([
    'model' => $model,
    'attribute' => 'body',
    'plugins' => ['charts'],
]) ?>
```

In case the plugin is not loaded. Check the order of the JavaScript files loded on your page.
You can simply set the `charts` plugin related asset files load after the widget assets by adding following to your application configuration.
On your `web.php` add:

```php
'assetManager' => [
    'bundles' => [
        'nterms\redactor\charts\ChartsRedactorPluginAsset' => [
            'depends' => [
                'yii\redactor\widgets\RedactorAsset',
            ],
        ],
    ],
],
```

This indicates that `ChartsRedactorPluginAsset` asset bundle depends on asset bundle of the widget, making it load assets in proper order.


### Use with [vova07/yii2-imperavi-widget](https://github.com/vova07/yii2-imperavi-widget) - Not tested

Register the `ChartsRedactorPluginAsset` asset bundle as shown above and enable the plugin:

```php
echo \vova07\imperavi\Widget::widget([
    'selector' => '#my-textarea-id',
    'settings' => [
        'lang' => 'ru',
        'minHeight' => 200,
        'plugins' => [
            'charts',
        ]
    ]
]);
```

In case the plugin is not loaded. Check the order of the JavaScript files loded on your page.
You can simply set the `charts` plugin related asset files load after the widget assets by adding following to your application configuration.
On your `web.php` add:

```php
'assetManager' => [
    'bundles' => [
        'nterms\redactor\charts\ChartsRedactorPluginAsset' => [
            'depends' => [
                'vova07\imperavi\Asset',
            ],
        ],
    ],
],
```

This indicates that `ChartsRedactorPluginAsset` asset bundle depends on asset bundle of the widget, making it load assets in proper order.


Known Issues
------------

This plugin is still at basic level and deliver only a limited set of
features comes with Chart.js. And there are some missing UX features
which I'm planing to develop soon. Here is list of known issues:

- Does not support Pie and Doughnut graphs.
- Generated charts are inserted into the Redactor in image format, hence once inserted charts cannot be edited.
- Closing the modal box will clear the data entered so far.


License
-------

[MIT](LICENSE)
