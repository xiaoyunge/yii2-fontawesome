Yii2 FontAwesome Asset
======
see  http://fontawesome.io/

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```sh
composer require yangshihe/yii2-fontawesome
```



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

自己使用