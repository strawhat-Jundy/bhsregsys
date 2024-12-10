<?php

namespace frontend\controllers;

use frontend\models\TblOfficialStudents;
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
use frontend\models\students\StudentTableSearch;
=======
use frontend\models\students\StudentsSearch;
>>>>>>> 0bf0e1f (students table fixed)
=======
use frontend\models\students\StudentsSearch;
>>>>>>> 0bf0e1f (students table fixed)
=======
use frontend\models\students\StudentsSearch;
>>>>>>> 0bf0e1f (students table fixed)
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudentsController implements the CRUD actions for TblOfficialStudents model.
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
     * Lists all TblOfficialStudents models.
     *
     * @return string
     */
    public function actionIndex()
    {
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        $searchModel = new StudentTableSearch();
=======
        $searchModel = new StudentsSearch();
>>>>>>> 0bf0e1f (students table fixed)
=======
        $searchModel = new StudentsSearch();
>>>>>>> 0bf0e1f (students table fixed)
=======
        $searchModel = new StudentsSearch();
>>>>>>> 0bf0e1f (students table fixed)
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionGetStudents(){
        $students = TblOfficialStudents::find()->select(['student_id', 'last_name'])->all();
        $studentsList = \yii\helpers\ArrayHelper::map($students, 'student_id', 'last_name');
        return $this->asJson($studentsList);
    }

    /**
     * Displays a single TblOfficialStudents model.
     * @param int $student_id Student ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($student_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($student_id),
        ]);
    }

    /**
     * Creates a new TblOfficialStudents model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new TblOfficialStudents();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'student_id' => $model->student_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing TblOfficialStudents model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $student_id Student ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($student_id)
    {
        $model = $this->findModel($student_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'student_id' => $model->student_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing TblOfficialStudents model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $student_id Student ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($student_id)
    {
        $this->findModel($student_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the TblOfficialStudents model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $student_id Student ID
     * @return TblOfficialStudents the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($student_id)
    {
        if (($model = TblOfficialStudents::findOne(['student_id' => $student_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
