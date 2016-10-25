<?php
/**
 * ajax modal 查找Icon,并返回 json 格式数据
 * 这action必须 配合js 回调使用, js 由于时间关系暂无分离,暂无公开
 *
 *@package common\actions\IconWidgetAction
 *@author yuzhiyang <yangshihe@qq.com>
 *@copyright yangshihe <yangshihe@qq.com/>
 *@version 1.0.0
 *@since 2016-06-20 新建
 *@todo form input  modal callback
 */

namespace yangshihe\fontawesome;

use yii\base\Action;
use Yii;
//use yii\fontAwesome\FontIcon;

class IconModalAction extends Action {
	public function run($fun = 'FontAwesome', $group = 'fontAwesome') {
		$models = FontIcon::$fun();

		$models = [

			'models' => $models,
			'group' => $group,

		];

        $file  = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR . 'icon.php';

		return $this->controller->renderFile($file, $models);
	}
}
