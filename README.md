Easy MarkDown Editor for Yii 2
==============================

Widget based on [Easy MarkDown Editor](https://easy-markdown-editor.tk/)

[![Latest Stable Version](https://poser.pugx.org/ezoterik/yii2-easymde/v/stable)](https://packagist.org/packages/ezoterik/yii2-easymde)
[![Total Downloads](https://poser.pugx.org/ezoterik/yii2-easymde/downloads)](https://packagist.org/packages/ezoterik/yii2-easymde)
[![License](https://poser.pugx.org/ezoterik/yii2-easymde/license)](https://packagist.org/packages/ezoterik/yii2-easymde)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist ezoterik/yii2-easymde "*"
```

or add

```
"ezoterik/yii2-easymde": "*"
```

to the require section of your composer.json.

Usage
-----

Once the extension is installed, simply add widget to your page as follows:

1) Usage with ActiveForm and model

```php
<?php echo $form->field($model, 'content')->widget(\ezoterik\easymde\EasyMDE::class, [
    'editorOptions' => [
        'showIcons' => ["code", "table"],
    ],
]); ?>
```

2) Usage without ActiveForm and model

```php
<?php echo \ezoterik\easymde\EasyMDE::widget([
    'name' => 'markdown-editor',
    'editorOptions' => [
        'showIcons' => ["code", "table"],
    ],
]);
?>
```

Markdown Editor Options
-----------------------

You can find them on the [options page](https://github.com/Ionaru/easy-markdown-editor#configuration)
