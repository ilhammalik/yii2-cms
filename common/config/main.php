<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
       'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapAsset' => [
                    'js' => ['js/bootstrap.js']
                ],
            ],
        ],
	 'authManager' => [
        'class' => 'yii\rbac\DbManager', // only support DbManager
    ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
