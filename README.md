yii2-redactor-charts
====================

An asset bunle to use chart.js plugin for Imperavi Redactor


Prerequisites
-------------

This plugin works only on Imperavi Redactor WYSIWYG editor. There are few yii2 extensions developed for integrating Redactor with your Yii2 project.
This plugin does not depend on any specific extension. Theoretically it should work with all of those extensions.
Here is a list of yii2-redactor extension I could find. Its up to your choice to use one suits for you.


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


Usage
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
