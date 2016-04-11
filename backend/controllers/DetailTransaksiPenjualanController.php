<?php

namespace backend\controllers;

use Yii;
use backend\models\DetailTransaksiPenjualan;
use backend\models\DetailTransaksiPenjualanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailTransaksiPenjualanController implements the CRUD actions for DetailTransaksiPenjualan model.
 */
class DetailTransaksiPenjualanController extends Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all DetailTransaksiPenjualan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DetailTransaksiPenjualanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailTransaksiPenjualan model.
     * @param integer $Id_Trans
     * @param string $Id_Detail
     * @return mixed
     */
    public function actionView($Id_Trans, $Id_Detail)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_Trans, $Id_Detail),
        ]);
    }

    /**
     * Creates a new DetailTransaksiPenjualan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DetailTransaksiPenjualan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Trans' => $model->Id_Trans, 'Id_Detail' => $model->Id_Detail]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DetailTransaksiPenjualan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $Id_Trans
     * @param string $Id_Detail
     * @return mixed
     */
    public function actionUpdate($Id_Trans, $Id_Detail)
    {
        $model = $this->findModel($Id_Trans, $Id_Detail);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_Trans' => $model->Id_Trans, 'Id_Detail' => $model->Id_Detail]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DetailTransaksiPenjualan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $Id_Trans
     * @param string $Id_Detail
     * @return mixed
     */
    public function actionDelete($Id_Trans, $Id_Detail)
    {
        $this->findModel($Id_Trans, $Id_Detail)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailTransaksiPenjualan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $Id_Trans
     * @param string $Id_Detail
     * @return DetailTransaksiPenjualan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_Trans, $Id_Detail)
    {
        if (($model = DetailTransaksiPenjualan::findOne(['Id_Trans' => $Id_Trans, 'Id_Detail' => $Id_Detail])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
