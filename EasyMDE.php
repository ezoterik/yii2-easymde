<?php

namespace ezoterik\easymde;

use yii\helpers\Html;
use yii\helpers\Inflector;
use yii\helpers\Json;
use yii\web\JsExpression;
use yii\widgets\InputWidget;

final class EasyMDE extends InputWidget
{
    public array $editorOptions = [];

    public function run()
    {
        if ($this->hasModel()) {
            echo Html::activeTextarea($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textarea($this->attribute, $this->value, $this->options);
        }

        $this->registerAssets();
    }

    protected function registerAssets(): void
    {
        $view = $this->getView();
        Asset::register($view);
        $varName = Inflector::variablize('editor_' . $this->id);

        $script = "var {$varName} = new EasyMDE(" . $this->getEditorOptions() . ");\n";
        $script .= "if(!window.EasyMDEInstances) { window.EasyMDEInstances = []; }\n";
        $script .= "window.EasyMDEInstances['{$this->options['id']}'] = {$varName};\n";

        $view->registerJs($script);
    }

    protected function getEditorOptions(): string
    {
        $this->editorOptions['element'] = new JsExpression('document.getElementById("' . $this->options['id'] . '")');

        return Json::encode($this->editorOptions);
    }
}
