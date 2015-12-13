<?php
namespace backend\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use common\models\LoginForm;
use yii\filters\VerbFilter;
use \backend\models\SimpelUser;
use yii\helpers\Url;
/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
   public $layout = 'admin';
    //public $defaultAction = 'coba';
   //public $enableCsrfValidation = false;
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login','reset', 'error','coba'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

   public function actionIndex()
    {
           
        return $this->render('index', [
         
        ]);
    }
    public function actionLogin()
    {  $this->layout = 'login';
        if (!\Yii::$app->user->isGuest) {
            return $this->goHome();
        }

         $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            Yii::$app->session->setFlash('success','Data tersimpan');
            return $this->goBack();
        } else {
            return $this->render('log', [
                'model' => $model,
            ]);
        }
    }

    public function actionLogout()
    {
            
            Yii::$app->user->logout();
            return $this->goHome();

    }

    //ilham fungsi reset password menambahkan tanggal 24 september 2015
       public function actionReset()
        { 
        $this->layout = 'login';
        $model = new User();
        if ($model->load(Yii::$app->request->post())) {
            if ($_POST['User']) {
                $model->attributes = $_POST['User'];
                $valid = $model->validate();

                if ($valid) {
                    $model = User::find()
                            ->where(['email' => $_POST['User']['email']])
                            ->one();
                    $str = 'abcefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890'.date('d');
                    $potong = str_shuffle($str);
                    $random = substr($potong, 3, 12);
                    $model->setPassword($random);
                    $content = '
                    <center><img src="http://i.imgur.com/p5lHZXS.png"/></center><br/>
                    <h4 align="center">Badan Pengawas Tenaga Nuklir  '.date('Y').'</h4>
                    <hr/>
                    <p>Yth '.$model->username.',<br/>  
                    Dengan ini kami sampaikan akun untuk masuk ke Sistem Aplikasi Perjalanan Dinas – BAPETEN, sebagai berikut:<br/> 
                    Username : '.$model->username.' <br/>
                    Password :<b>'.$random.'</b><br/>
                    Mohon lakukan penggantian password Anda setelah melakukan login. <hr/>
                    <h5 align="center">Subbag Perjalanan Dinas Biro Umum BAPETEN  '.date('Y').'</h5><br/>';
                    Yii::$app->mailer->compose("@common/mail/layouts/html", ["content" => $content ])
                        ->setTo( $_POST['User']['email'])
                        ->setFrom([$_POST['User']['email'] => $model->username])
                        ->setSubject('Ubah Kata Sandi')
                        ->setTextBody($random)
                        ->send();
                        $model->save();
                    return $this->redirect(['/site/login']);
                }


            }
        }
        return $this->render('reset', [
                    'model' => $model
        ]);
    }
}
