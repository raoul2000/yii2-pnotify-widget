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
 *
 * @see https://github.com/sciactive/pnotify
 */
class PNotify extends Widget
{
	/**
	 * @var array Optionbs for the PNotify plugin
	 */
	public $pluginOptions = [];

	/**
	 * @see \yii\base\Widget::run()
	 */
    public function run()
    {
        $this->registerClientScript();
    }
    /**
     * Register js initialization script.
     */
    public function registerClientScript()
    {
    	$view = $this->getView();
    	PNotifyAsset::register($view);

    	$options = empty($this->pluginOptions) ? '' : Json::encode($this->pluginOptions);
    	$js = "new PNotify(".$options.");";

    	$view->registerJs($js);
    }
    /**
     * Register a set of stacks so they are available to PNotify widgets.
     * 
     * The stacks definitions should be passed as an associative array where keys are
     * the stack name, and value is the stak value.
     * <pre>
     * [
     * 		'stack_nam_1' => [
     * 			'dir1' => 'down',
     * 			'dir2' => 'right',
     * 			'push' => 'top'
     * 		],
     * 		'stack_nam_2' => [
     * 			'dir1' => 'down',
     * 			'dir2' => 'right',
     * 			'push' => 'top'
     * 		]
     * ]
     * </pre>
     * @param array $stack definition of stacks
     * @throws InvalidConfigException
     */
    static public function registerStack($stacks,$view)
    {
    	if ( ! is_array($stacks)) {
    		throw new InvalidConfigException('The $stacks argument should be provided as an array');
    	}
    	if ( ! $view instanceof yii\web\View) {
    		throw new InvalidConfigException('The $view argument should be provided as a yii\web\View');
    	}
    	foreach( $stacks as $name => $definition) {
    		$view->registerJs('var '.$name.' = '.Json::encode($definition).';');
    	}
    }
}
