<?php
/**
 * LayDateAsset
 *
 *@package vendor.tangniyuqi.laydate
 *@author tangming <tangniyuqi@163.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2017-10-30 Create
 *@todo N/A
 */
namespace tangniyuqi\laydate;

class LayDateAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $css = [
        'theme/default/laydate.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'laydate.js'
    ];

    /**
     * @inheritdoc
     */
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    /*
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->sourcePath = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
    }
}