<?php

namespace frontend\controllers;

use frontend\models\TblOfficialSummary;
use frontend\models\summary;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SummaryController implements the CRUD actions for TblOfficialSummary model.
 */
class SummaryController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                        'delete' => ['POST'],
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all TblOfficialSummary models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new summary();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblOfficialSummary model.
     * @param int $summary_id Summary ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($summary_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($summary_id),
        ]);
    }

    /**
     * Creates a new TblOfficialSummary model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblOfficialSummary();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'summary_id' => $model->summary_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblOfficialSummary model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $summary_id Summary ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($summary_id)
    {
        $model = $this->findModel($summary_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'summary_id' => $model->summary_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblOfficialSummary model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $summary_id Summary ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($summary_id)
    {
        $this->findModel($summary_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblOfficialSummary model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $summary_id Summary ID
     * @return TblOfficialSummary the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($summary_id)
    {
        if (($model = TblOfficialSummary::findOne(['summary_id' => $summary_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
