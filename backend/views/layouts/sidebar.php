<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Url;
use hscstudio\mimin\components\Mimin;
use yii\widgets\Menu;
            use kartik\sidenav\SideNav;
?>
<div id="sidebar">
    <div class="sidebar-scroll">
        <div class="sidebar-content">
            <a href="./index.php.html" class="sidebar-brand">
            Ilham
            </a>
            <div class="sidebar-section sidebar-user clearfix">
                <div class="sidebar-user-avatar">
                    <a href="./page_ready_user_profile.php.html">
                    <?= Html::img('@web/theme/img/User-Icon.png'); ?></a>
                </div>
                <div class="sidebar-user-name"><?= Yii::$app->user->identity->username ?></div>
                <div class="sidebar-user-links">
                    <a href="./login.php.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                </div>
            </div>
            <?php
                    
                        
                            $items = [
                                ['label' => 'Home', 'url' => ['/site/index/']],
                            
                                ['label' => 'Post', 'url' => ['/post/index'], 'items' => [
                                    ['label' => 'All Post', 'url' => ['/post/index']],
                                    ['label' => 'All Category', 'url' => ['/category/index']],
                                    ['label' => 'All Tags', 'url' => ['/mimin/route']],
                                
                                ]],

                                ['label' => 'Pengaturan', 'url' => ['/mimin/user'], 'items' => [
                                    ['label' => 'User', 'url' => ['/mimin/user']],
                                    ['label' => 'User Group', 'url' => ['/mimin/role']],
                                    ['label' => 'Generator', 'url' => ['/mimin/route']],
                                
                                ]],
                                [
                                        'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                                        'url' => ['/site/logout'],
                                        'linkOptions' => ['data-method' => 'post']
                                    ],
                            ];
                            $items = Mimin::filterRouteMenu($items);
                            if(count($items)>0){
                                $menuItems[] = ['label' => 'Reporting', 'items' => $items];
                            }
                            echo SideNav::widget([
                                'options' => ['class' => 'sidebar-nav'],
                                'encodeLabels' => false, // set this to nav-tab to get tab-styled navigation
                                'items' => $items,
                            ]);
                        
            ?>
            <div class="sidebar-header">
                <span class="sidebar-header-options clearfix">
                <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"><i class="gi gi-refresh"></i></a>
                </span>
                <span class="sidebar-header-title">Activity</span>
                <br/>

                <center>Computer Info</center>
                <p align="center">
                <font color="white">Anda login  dengan alamat IP :
                <?php echo isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : ''; ?>
                </font>
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    function startTime() {
        var today = new Date();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        document.getElementById('txt').innerHTML = h + ":" + m + ":" + s;
        var t = setTimeout(function () {
            startTime()
        }, 500);
    }
    function checkTime(i) {
        if (i < 10) {
            i = "0" + i
        }
        ;  // add zero in front of numbers < 10
        return i;
    }
</script>