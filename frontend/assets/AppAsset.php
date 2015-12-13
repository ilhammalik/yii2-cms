<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace frontend\assets;

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
    'indo/css/fontello/css/fontello.css',
    
    'indo/js/rs-plugin/settings.css',

    'indo/css/woocommerce/woocommerce-layout.css',
    'indo/css/woocommerce/woocommerce-smallscreen.css',
    'indo/css/woocommerce/woocommerce.css',

    'indo/css/style.css',
    'indo/css/shortcodes.css',
    'indo/css/core.animation.css',
    'indo/css/tribe-style.css',
    'indo/css/skins/skin.css',

    'indo/css/core.portfolio.css',
    'indo/js/mediaelement/mediaelementplayer.min.css',
    'indo/js/mediaelement/wp-mediaelement.css',
    'indo/js/prettyPhoto/css/prettyPhoto.css', 
    'indo/js/core.customizer/front.customizer.css',
    'indo/js/core.messages/core.messages.css',
    'indo/js/swiper/idangerous.swiper.min.css',
    'indo/css/responsive.css',
    'indo/css/skins/skin-responsive.css',
    'indo/css/slider-style.css',
    'indo/css/custom-style.css',
    ];
    public $js = [
    'indo/js/jquery/jquery.min.js',
    'indo/js/jquery/jquery-migrate.min.js',  
    'indo/js/jquery/ui/core.min.js',
    'indo/js/jquery/ui/widget.min.js',
    'indo/js/jquery/ui/tabs.min.js',
    'indo/js/jquery/ui/accordion.min.js',
    'indo/js/jquery/ui/effect.min.js',
    'indo/js/jquery/ui/effect-fade.min.js',
    'indo/js/jquery/jquery.blockUI.min.js',
    'indo/js/jquery/jquery.cookie.min.js',
    
    'indo/js/global.min.js',
    'indo/js/core.utils.min.js',
    'indo/js/core.init.min.js',  
    'indo/js/shortcodes/shortcodes.min.js',  
    
    'indo/js/rs-plugin/jquery.themepunch.tools.min.js',
    'indo/js/rs-plugin/jquery.themepunch.revolution.min.js', 
    'indo/js/slider_init.js',

    'indo/js/superfish.min.js',
    'indo/js/jquery.slidemenu.min.js',

    'indo/js/mediaelement/mediaelement-and-player.min.js',
    'indo/js/mediaelement/wp-mediaelement.min.js',

    'indo/js/core.messages/core.messages.min.js',
    
    'indo/js/jquery.isotope.min.js',
    'indo/js/hover/jquery.hoverdir.min.js',
    'indo/js/prettyPhoto/jquery.prettyPhoto.min.js',     
    'indo/js/swiper/idangerous.swiper-2.7.min.js',
    'indo/js/swiper/idangerous.swiper.scrollbar-2.4.min.js',
    'indo/js/diagram/chart.min.js',
    
    'indo/js/core.customizer/front.customizer.min.js',
    'indo/js/skin.customizer.min.js',

   

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
