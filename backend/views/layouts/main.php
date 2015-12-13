<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

 <div id="page-container" class="sidebar-full">
            <?= $this->render('//layouts/sidebar.php') ?>

            <div id="main-container">
                <header class="navbar navbar-default">
                    <ul class="nav navbar-nav-custom">
                        <li class="hidden-xs hidden-sm">
                            <a href="javascript:void(0)" id="sidebar-toggle-lg">
                                <i class="fa fa-list-ul fa-fw"></i>
                            </a>
                        </li>
                        <li class="hidden-md hidden-lg">
                            <a href="javascript:void(0)" id="sidebar-toggle-sm">
                                <i class="fa fa-bars fa-fw"></i>
                            </a>
                        </li>
                        <li class="hidden-md hidden-lg">
                            <a href="./index.php.html">
                                <i class="gi gi-stopwatch fa-fw"></i>
                            </a>
                        </li>
                    </ul>
                   

                    <ul class="nav navbar-nav-custom pull-right">
                        <li>
                            <br/>
                            <i class="fa fa-calendar fa-fw"></i> <?= date('d-m-Y') ?> <i class="fa fa-clock-o fa-fw pull-right"></i>&nbsp;&nbsp;
                        </li>
                        <li>
                            <br/>
                            <div id="txt"></div>
                        </li>

                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                <?= Html::img('@web/theme/img/User-Icon.png'); ?><i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-custom dropdown-menu-right">

                                <li class="divider"></li>
                                <li>
                                    <?= Html::a(Yii::t('app', ' <i class="fa fa-user fa-fw pull-right"></i> Profile'), ['/user/profile', 'id' => Yii::$app->user->id]) ?>
                                </li>
                                <li>
                                    <?= Html::a(Yii::t('app', ' <i class="fa fa-key fa-fw pull-left"></i> Ubah Kata Sandi'), ['/user/pass', 'id' => Yii::$app->user->id]) ?>
                                </li>

                                <li class="divider"></li>
                                <li>
                                    <?=
                                    Html::a(Yii::t('app', ' <i class="fa fa-sign-out fa-fw"></i> Logout'), ['/site/logout'], [
                                        //'class' => 'btn btn-danger',
                                        'data' => [
                                            //'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                                            'method' => 'post',
                                        ],
                                    ])
                                    ?>
                                </li>
                            </ul>
                            </header><div id="page-content">
                                <?=
                                Breadcrumbs::widget([
                                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                                ])
                                ?>
                                <?= Alert::widget() ?>

                                <?= $content ?>

                            </div>
                            <footer class="clearfix">
                                <div class="pull-right">
                                   <a href="http://www.ipteku.com" target="_blank">Ilham Malik Ibrahim</a>
                                    
                                </div>
                                <div class="pull-left">
                                   <a href="http://www.ipteku.com" target="_blank">Copyright Ilham Malik Ibrahim <?php echo date('Y') ?> </a>
                                </div>
                            </footer>
                            </div>
                            </div>
                            <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
