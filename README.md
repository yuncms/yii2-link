Link for Yii 2
=======

[![Packagist Version](https://img.shields.io/packagist/v/yuncms/yii2-link.svg?style=flat-square)](https://packagist.org/packages/yuncms/yii2-link)
[![Total Downloads](https://img.shields.io/packagist/dt/yuncms/yii2-link.svg?style=flat-square)](https://packagist.org/packages/yuncms/yii2-link)

适用于Yii2 的友情连接模块，对YUNCMS定制，不可单独使用.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist yuncms/yii2-link "*"
```

or add

```
"yuncms/yii2-link": "*"
```

to the require section of your `composer.json` file.

Usage
-----

Once the extension is installed, simply modify your application configuration as follows:

```php
return [
	'link' => [
		'class' => 'yuncms\link\Module',
	],
	...
];
```

Install Migrations

````./yii migrate/up --migrationPath=@vendor/yuncms/yii2-link/migrations````

You can then access QA through the following URL:

```
http://localhost/path/to/index.php?r=link
```

Widgets
-----

You can use available widgets
```php
<?= Links::widget(['limit'=>10,'cache'=>3600,'type'=>1]) ?>
```

## License

This is released under the MIT License. See the bundled [LICENSE.md](LICENSE.md)
for details.