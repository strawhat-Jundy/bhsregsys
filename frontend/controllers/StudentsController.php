<?php

namespace frontend\controllers;

use frontend\models\TblOfficialFinalSchedule;
use frontend\models\schedule\scheduleSearch;
use frontend\models\TblOfficialStudents;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudentsController implements the CRUD actions for TblOfficialFinalSchedule model.
 */
class StudentsController extends Controller
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
     * Lists all TblOfficialFinalSchedule models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new scheduleSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single TblOfficialFinalSchedule model.
     * @param int $Schedule_ID Schedule ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($Schedule_ID)
    {
        return $this->render('view', [
            'model' => $this->findModel($Schedule_ID),
        ]);
    }

    /**
     * Creates a new TblOfficialFinalSchedule model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblOfficialFinalSchedule();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'Schedule_ID' => $model->Schedule_ID]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionGetStudents(){
        $students = TblOfficialStudents::find()->select(['student_id', 'last_name'])->all();
        $studentsList = \yii\helpers\ArrayHelper::map($students, 'student_id', 'last_name');
        return $this->asJson($studentsList);
    }

    /**
     * Updates an existing TblOfficialFinalSchedule model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $Schedule_ID Schedule ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($Schedule_ID)
    {
        $model = $this->findModel($Schedule_ID);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'Schedule_ID' => $model->Schedule_ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblOfficialFinalSchedule model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $Schedule_ID Schedule ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($Schedule_ID)
    {
        $this->findModel($Schedule_ID)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblOfficialFinalSchedule model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $Schedule_ID Schedule ID
     * @return TblOfficialFinalSchedule the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($Schedule_ID)
    {
        if (($model = TblOfficialFinalSchedule::findOne(['Schedule_ID' => $Schedule_ID])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
