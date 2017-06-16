<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ListeditForm;
use yii\web\UploadedFile;

class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
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
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {     
        if (!Yii::$app->user->isGuest) {
            return $this->redirect(['site/listedit']);
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['site/listedit']);
        }
        
        $this->layout = 'admin';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays brands page.
     *
     * @return string
     */    
    public function actionBrands()
    {
        return $this->render('brands');
    }
    
    /**
     * Displays list edit page.
     *
     * @return string
     */    
    public function actionListedit()
    {
        if (Yii::$app->user->isGuest) {
            return $this->goHome();
        }
        
        $model = new ListeditForm();
        if (Yii::$app->request->isPost) {
            $model->load(Yii::$app->request->post());
            $model->pricefile = UploadedFile::getInstance($model, 'pricefile');
            if ($model->upload()) {
                // file is uploaded successfully
                return $this->goBack();
            }
        }
        
        $this->layout = 'admin';
        return $this->render('listedit', [
            'model' => $model,
        ]);
    }
}
