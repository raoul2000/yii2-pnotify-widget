<?php
namespace raoul2000\widget\pnotify;

use yii\web\AssetBundle;

class PNotifyAsset extends AssetBundle
{
	public $css = [
		'css/pnotify.custom.min.css'
	];
	public $js = [
		'js/pnotify.custom.min.js'
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];
	public function init() {
		$this->sourcePath = __DIR__.'/assets';
		return parent::init();
	}
}
