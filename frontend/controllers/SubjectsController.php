<?php

namespace frontend\controllers;

use frontend\models\BalingasaHighSchoolSubjects;
use frontend\models\subject\subjectsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * SubjectsController implements the CRUD actions for BalingasaHighSchoolSubjects model.
 */
class SubjectsController extends Controller
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
     * Lists all BalingasaHighSchoolSubjects models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new subjectsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single BalingasaHighSchoolSubjects model.
     * @param int $subject_id Subject ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($subject_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($subject_id),
        ]);
    }

    /**
     * Creates a new BalingasaHighSchoolSubjects model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BalingasaHighSchoolSubjects();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'subject_id' => $model->subject_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BalingasaHighSchoolSubjects model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $subject_id Subject ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($subject_id)
    {
        $model = $this->findModel($subject_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'subject_id' => $model->subject_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BalingasaHighSchoolSubjects model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $subject_id Subject ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($subject_id)
    {
        $this->findModel($subject_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BalingasaHighSchoolSubjects model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $subject_id Subject ID
     * @return BalingasaHighSchoolSubjects the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($subject_id)
    {
        if (($model = BalingasaHighSchoolSubjects::findOne(['subject_id' => $subject_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
