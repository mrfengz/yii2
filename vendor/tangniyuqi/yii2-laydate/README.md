## Install

add `tangniyuqi/yii2-laydate` to composer.json

```sh
$ composer install
```

```
$ php composer.phar require tangniyuqi/yii2-laydate "*"
```

or add

```
"tangniyuqi/yii2-laydate": "*"
```

to the ```require``` section of your `composer.json` file.

## Usage

in view:

```
use tangniyuqi\assets\LayDateAsset;

LayDateAsset::register($this);

```

or

```
echo $form->field($model, 'birth')->widget('tangniyuqi\laydate\LayDate', [
        'format' => 'Y',
        'clientOptions' => [
            'type' => 'year', //see http://www.layui.com/doc/modules/laydate.html#type
            'format' => 'yyyy', //see http://www.layui.com/doc/modules/laydate.html#format
        ]
    ]);
```