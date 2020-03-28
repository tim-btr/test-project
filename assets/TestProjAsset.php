<?php
namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TestProjAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        "/themes/test-proj/css/bootstrap.min.css",
        "/themes/test-proj/css/font-awesome.min.css",
        "/themes/test-proj/css/animate.min.css",
        "/themes/test-proj/css/owl.carousel.css",
        "/themes/test-proj/css/owl.theme.css",
        "/themes/test-proj/css/owl.transitions.css",
        "/themes/test-proj/css/style.css",
        "/themes/test-proj/css/responsive.css",
    ];
    public $js = [
        "/themes/test-proj/js/jquery-1.11.3.min.js",
        "/themes/test-proj/js/bootstrap.min.js",
        "/themes/test-proj/js/owl.carousel.min.js",
        "/themes/test-proj/js/jquery.stickit.min.js",
        "/themes/test-proj/js/menu.js",
        "/themes/test-proj/js/scripts.js",
    ];
    public $depends = [];
}
