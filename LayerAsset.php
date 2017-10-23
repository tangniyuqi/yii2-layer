<?php
/**
 * LayerAsset
 *
 *@package vendor.tangniyuqi.layer
 *@author tangming <tangniyuqi@163.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2017-05-24 Create
 *@todo N/A
 */
namespace tangniyuqi\layer;

class LayerAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $css = [
        'theme/default/layer.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'layer.js'
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