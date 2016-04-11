<?php

namespace backend\controllers;

use Yii;
use backend\models\DetailKompensasiDanBenefitBulanan;
use backend\models\DetailKompensasiDanBenefitBulananSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * DetailKompensasiDanBenefitBulananController implements the CRUD actions for DetailKompensasiDanBenefitBulanan model.
 */
class DetailKompensasiDanBenefitBulananController extends Controller
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
     * Lists all DetailKompensasiDanBenefitBulanan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new DetailKompensasiDanBenefitBulananSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single DetailKompensasiDanBenefitBulanan model.
     * @param string $Id_KomBen
     * @param string $Id_Karyawan
     * @return mixed
     */
    public function actionView($Id_KomBen, $Id_Karyawan)
    {
        return $this->render('view', [
            'model' => $this->findModel($Id_KomBen, $Id_Karyawan),
        ]);
    }

    /**
     * Creates a new DetailKompensasiDanBenefitBulanan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new DetailKompensasiDanBenefitBulanan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_KomBen' => $model->Id_KomBen, 'Id_Karyawan' => $model->Id_Karyawan]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing DetailKompensasiDanBenefitBulanan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $Id_KomBen
     * @param string $Id_Karyawan
     * @return mixed
     */
    public function actionUpdate($Id_KomBen, $Id_Karyawan)
    {
        $model = $this->findModel($Id_KomBen, $Id_Karyawan);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Id_KomBen' => $model->Id_KomBen, 'Id_Karyawan' => $model->Id_Karyawan]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing DetailKompensasiDanBenefitBulanan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $Id_KomBen
     * @param string $Id_Karyawan
     * @return mixed
     */
    public function actionDelete($Id_KomBen, $Id_Karyawan)
    {
        $this->findModel($Id_KomBen, $Id_Karyawan)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the DetailKompensasiDanBenefitBulanan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $Id_KomBen
     * @param string $Id_Karyawan
     * @return DetailKompensasiDanBenefitBulanan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Id_KomBen, $Id_Karyawan)
    {
        if (($model = DetailKompensasiDanBenefitBulanan::findOne(['Id_KomBen' => $Id_KomBen, 'Id_Karyawan' => $Id_Karyawan])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
