<?php

namespace wfcreations\metronic\bundles;

use yii\web\AssetBundle;

class MomentAsset extends AssetBundle {

    public $sourcePath = '@wfcreations/metronic/assets/global/';
    public $js = [
        'plugins/moment.min.js',
    ];

}
