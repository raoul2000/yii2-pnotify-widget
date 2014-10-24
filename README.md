yii2-pnotify-widget
==================
Wrapper around PNotify, a JavaScript notifications plugin for Bootstrap and jQuery UI.

Check out the  [PNotify Website](http://sciactive.com/pnotify/) for a demo of the Plugin.

**important** : please note that this widget only includes the basic PNotify modules : *desktop* and *buttons*

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

Once the extension is installed, simply use it in your code like this  :

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

Stacks
------
This widget includes an easy way of creating and using custom stacks that will drive the way PNotify displays notification messages.

To know more about **PNotify** Stacks, please refer to the [documentation](https://github.com/sciactive/pnotify/blob/master/README.md).

Defining a stack with the widget is easy. The example below defines a stack that will display notification vertically in the top-left corner.
Then, use this stack (called "stack_top_left") to display a notification. The CSS class *stack-topleft* is part of the built-in CSS classes
provided by PNotify.

```php
<?php 
	
	// define "stack_top_left' stack
	
	\raoul2000\widget\pnotify\PNotify::registerStack( 
		[
			'stack_top_left' => [
				'dir1' => 'right',
				'dir2' => 'right',
				'push' => 'top'
			]
		],
		$this
	);
	
	// display a notification using the "stack_top_left" stack.
	// Note that you must use yii\web\JsExpression for the "stack" plugin option value. 
	
	\raoul2000\widget\pnotify\PNotify::widget([
		'pluginOptions' => [
			'title' => 'Information',
			'text' => 'This is a very intresting information message : read it !',
			'type' => 'info',
			'stack' => new yii\web\JsExpression('stack_top_left'),
			'addclass' => 'stack-topleft',
			'desktop' => [
				'desktop' => true
			],
			'buttons' => [
				'closer_hover' => false
			]
		]
	]);	
	
?>
```
As you may have noted, the widget above defines specific settings for the **desktop** and **buttons** modules.

For more information on the plugin options, please refer to [PNotify@github](https://github.com/sciactive/pnotify).

License
-------

**yii2-pnotify-widget** is released under the BSD 3-Clause License. See the bundled `LICENSE.md` for details.
