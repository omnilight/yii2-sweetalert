<?php

namespace omnilight\assets;
use yii\web\AssetBundle;


/**
 * Class SweetAlertAsset
 */
class SweetAlertAsset extends AssetBundle
{
    public $sourcePath = '@bower/sweetalert/dist';

    public $css = [
        'sweetalert.css',
    ];

    public $js = [
        'sweetalert.min.js'
    ];
}
