<?php

/*
* @author Muhammadjonov Ulug'bek <muhammadjonovulugbek98@gmail.com>
* @link telegram: https://t.me/U_Muhammadjonov
* @date 24.11.2022, 16:03
*/

namespace ulugbek\disktotalspace\controllers;

use ulugbek\disktotalspace\models\DiskTotalSpace;
use yii\filters\AccessControl;
use yii\web\Controller;

class DefaultController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'access' => [
                    'class' => AccessControl::className(),
                    'rules' => [
                        [
                            'allow' => true,
                            'roles' => ['@'],
                        ],
                    ],
                ],
            ]
        );
    }

    /**
     * @return string
     */
    public function actionIndex()
    {
        $memories = DiskTotalSpace::find()
            ->all();

        return $this->render('info', ['memories' => $memories]);
    }
}