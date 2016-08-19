Yii2 FontAwesome Asset
======
see  http://fontawesome.io/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
php composer.phar require --prefer-dist yangshihe/yii2-fontawesome "*"
```

or add

```
"yangshihe/yii2-fontawesome": "*"
```

to the require section of your `composer.json` file.


View
-----

```php

yangshihe\fontawesome\FontAwesomeAsset::register($this);
```
OR

```php
class AppAsset extends AssetBundle
{
    public $depends = [
        ...
        'yangshihe\fontawesome\FontAwesomeAsset'
    ];
}
```

挂件的使用..... 稍后
