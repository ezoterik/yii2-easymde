<?php /** @noinspection PhpMissingFieldTypeInspection */

namespace ezoterik\easymde;

use yii\web\AssetBundle;

final class Asset extends AssetBundle
{
    public $sourcePath = '@npm/easymde/dist';

    public $css = [
        'easymde.min.css',
    ];

    public $js = [
        'easymde.min.js',
    ];
}
