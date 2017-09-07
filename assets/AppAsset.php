<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'static/h-ui/css/H-ui.min.css',
        'static/h-ui.admin/css/H-ui.admin.css',
        'static/h-ui.admin/css/H-ui.login.css',
        'static/h-ui.admin/css/style.css',
        'lib/Hui-iconfont/1.0.8/iconfont.css',
        ['static/h-ui.admin/skin/default/skin.css','id' => 'skin']
    ];


    public $js = [
        'lib/jquery/1.9.1/jquery.min.js',
        'lib/layer/2.4/layer.js',
        'static/h-ui/js/H-ui.min.js',
        'static/h-ui.admin/js/H-ui.admin.js',
        'lib/jquery.contextmenu/jquery.contextmenu.r2.js',
    ];



    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
    ];
}
