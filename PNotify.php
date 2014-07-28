<?php
namespace raoul2000\widget\pnotify;

use Yii;
use yii\base\Widget;
use yii\base\InvalidConfigException;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\web\JsExpression;

/**
 * PNotify is a wrapper for the [PNotify Plugin](http://sciactive.com/pnotify/).
 * For documentation on plugin option, please refer to https://github.com/sciactive/pnotify
 */
class PNotify extends Widget
{

	/**
	 * @var array options for the PNotify plugin
	 */
	public $pluginOptions = [];

	public function init()
	{
		parent::init();
	}

	/**
	 * @see \yii\base\Widget::run()
	 */
	public function run()
	{
		$this->registerClientScript();
	}

	/**
	 */
	public function registerClientScript()
	{
		$view = $this->getView();
		PNotifyAsset::register($view);

		$options = empty($this->pluginOptions) ? '' : Json::encode($this->pluginOptions);
		$js = "new PNotify(" . $options . ");";

		$view->registerJs($js);
	}
}
