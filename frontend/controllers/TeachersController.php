<?php

namespace frontend\controllers;

// use frontend\models\BalingasaHighSchoolTeachers;
use frontend\models\TblOfficialTeachers;
use frontend\models\teacher\teachersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TeachersController implements the CRUD actions for BalingasaHighSchoolTeachers model.
 */
class TeachersController extends Controller
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
     * Lists all BalingasaHighSchoolTeachers models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new teachersSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BalingasaHighSchoolTeachers model.
     * @param int $teacher_id Teacher ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($teacher_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($teacher_id),
        ]);
    }

    /**
     * Creates a new BalingasaHighSchoolTeachers model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    // public function actionCreate()
    // {
    //     $model = new BalingasaHighSchoolTeachers();

    //     if ($this->request->isPost) {
    //         if ($model->load($this->request->post()) && $model->save()) {
    //             return $this->redirect(['view', 'teacher_id' => $model->teacher_id]);
    //         }
    //     } else {
    //         $model->loadDefaultValues();
    //     }

    //     return $this->render('create', [
    //         'model' => $model,
    //     ]);
    // }

    public function actionGetTeachers(){
        $teachers = TblOfficialTeachers::find()->select(['teacher_id', 'last_name'])->all();
        $TeacherList = \yii\helpers\ArrayHelper::map($teachers, 'teacher_id', 'last_name');
        return $this->asJson($TeacherList);
    }

    /**
     * Updates an existing BalingasaHighSchoolTeachers model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $teacher_id Teacher ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($teacher_id)
    {
        $model = $this->findModel($teacher_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'teacher_id' => $model->teacher_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BalingasaHighSchoolTeachers model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $teacher_id Teacher ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($teacher_id)
    {
        $this->findModel($teacher_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BalingasaHighSchoolTeachers model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $teacher_id Teacher ID
     * @return BalingasaHighSchoolTeachers the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    // protected function findModel($teacher_id)
    // {
    //     if (($model = BalingasaHighSchoolTeachers::findOne(['teacher_id' => $teacher_id])) !== null) {
    //         return $model;
    //     }

    //     throw new NotFoundHttpException('The requested page does not exist.');
    // }
}
