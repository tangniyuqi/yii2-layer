<?php
/**
 * LayerMobileAsset
 *
 *@package vendor.tangniyuqi.layer
 *@author tangming <tangniyuqi@163.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2017-05-24 Create
 *@todo N/A
 */
namespace tangniyuqi\layer;

class LayerMobileAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $css = [
        'mobile/need/layer.css',
    ];

    /**
     * @inheritdoc
     */
    public $js = [
        'mobile/layer.js'
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