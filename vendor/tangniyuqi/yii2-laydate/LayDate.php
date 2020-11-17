<?php
/**
 * LayDate
 *
 *@package vendor.tangniyuqi.laydate
 *@author tangming <tangniyuqi@163.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2017-11-29 Create
 *@todo N/A
 */
namespace tangniyuqi\laydate;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\helpers\ArrayHelper;
use yii\widgets\InputWidget;
use yii\base\InvalidParamException;
use yii\base\InvalidConfigException;

class LayDate extends InputWidget
{
    /**
     * @inheritdoc
     */
    public $format = '';

    public $clientOptions = [];

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }

        $this->clientOptions = ArrayHelper::merge([
            'elem' => '#'.$this->options['id'],
            'eventElem' => '#'.$this->options['id'].'-addon',
            'event' => 'focus',
            'trigger' => 'click',
        ], $this->clientOptions);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo $this->renderWidget();

        LayDateAsset::register($this->view);
        $options = Json::htmlEncode($this->clientOptions);

        $this->view->registerJs("laydate.render({$options});");
    }

    /**
     * Renders the DatePicker widget.
     * @return string the rendering result.
     */
    protected function renderWidget()
    {
        $contents = [];

        if ($this->hasModel()) {
            $value = Html::getAttributeValue($this->model, $this->attribute);
        } else {
            $value = $this->value;
        }

        if ($this->format && $value !== null && $value !== '') {
            try {
                $value = Yii::$app->formatter->asDatetime($value, 'php:'.$this->format);
            } catch (InvalidParamException $e) {

            }
        }

        $options = $this->options;
        $options['value'] = $value;
        $options['class'] = 'form-control';

        if ($this->hasModel()) {
            $contents[] = Html::activeTextInput($this->model, $this->attribute, $options);
        } else {
            $contents[] = Html::textInput($this->name, $value, $options);
        }

        return implode("\n", $contents);
    }
}