<?php
namespace raoul2000\widget\pnotify;

use yii\web\AssetBundle;
/**
 * Asset bundle around PNotify assets.
 *
 * @see https://github.com/sciactive/pnotify
 * @author Raoul
 *
 */
class PNotifyAsset extends AssetBundle
{
	public $depends = [
		'yii\web\JqueryAsset'
	];

	/**
	 * Initialize the widget.
	 * 
	 * If YII_ENV_DEV is defined, the not minified version of the css and the js files
	 * are used.
	 * @see \yii\web\AssetBundle::init()
	 */
	public function init() {
		$this->sourcePath = __DIR__.'/assets';
		
		$this->js = [
			'js/pnotify.custom'.( YII_ENV_DEV ? '.js' : '.min.js' )
		];
		$this->css = [
			'css/pnotify.custom'.( YII_ENV_DEV ? '.css' : '.min.css' )
		];
		return parent::init();
	}
}
