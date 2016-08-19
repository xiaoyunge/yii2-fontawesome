<?php
/**
 * @author yangshihe@qq.com
 * @since 1.0
 */

namespace yangshihe\fontawesome;

use yii\web\AssetBundle;

/**
 * Asset bundle for the Twitter fontAwesome 4.6 css and fonts files.
 *
 * @author DNA <yangshihe@qq.com>
 * @since 1.0
 */

class FontAwesomeAsset extends AssetBundle
{

    public $css = [
        'css/font-awesome.min.css',
    ];

    public function init()
    {
        parent::init();
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'dist';
    }
}
