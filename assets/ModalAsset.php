<?php
/**
 * для подключения скрипта модального окна
 * User: Alex
 * Date: 15.03.2019
 * Time: 9:37
 */

namespace app\assets;

use yii\web\AssetBundle;

class ModalAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

    ];
    public $js = [
        'js/modal.js'
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}