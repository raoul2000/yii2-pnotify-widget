yii2-pnotify-widget
==================
Wrapper around PNotify, JavaScript notifications for Bootstrap, jQuery UI,
and the Web Notifications Draft. 

Check out the  [PNotify Website](http://sciactive.com/pnotify/) for demo of the Plugin.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist raoul2000/yii2-pnotify-widget "*"
```

or add

```
"raoul2000/yii2-pnotify-widget": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php 
	\raoul2000\widget\pnotify\PNotify::widget([
		'pluginOptions' => [
			'title' => 'My Notification',
			'text' => 'this is my \'first\' Notification using <b>PNotify</b>.',
		]
	]);
?>
```

Note that the PNotify built assets only includes the **Desktop** module.


For more information on the plugin options, please refer to [PNotify@github](https://github.com/sciactive/pnotify).

License
-------

**yii2-pnotify-widget** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.