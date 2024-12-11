<?php

namespace frontend\controllers;

use frontend\models\BalingasaHighSchoolRooms;
use frontend\models\TblOfficialRoomTable;
use frontend\models\rooms\roomsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RoomsController implements the CRUD actions for BalingasaHighSchoolRooms model.
 */
class RoomsController extends Controller
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
     * Lists all BalingasaHighSchoolRooms models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new roomsSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

  


    /**
     * Displays a single BalingasaHighSchoolRooms model.
     * @param int $room_id Room ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($room_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($room_id),
        ]);
    }

    public function actionGetRoom(){
        $room = TblOfficialRoomTable::find()->select(['room_id', 'Room_Number'])->all();
        $roomList = \yii\helpers\ArrayHelper::map($room, 'room_id', 'Room_Number');
        return $this->asJson($roomList);
    }   

    /**
     * s a new BalingasaHighSchoolRooms model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new BalingasaHighSchoolRooms();

        if ($this->request->isPost) {
            if ($model->load($this->request->post()) && $model->save()) {
                return $this->redirect(['view', 'room_id' => $model->room_id]);
            }
        } else {
            $model->loadDefaultValues();
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing BalingasaHighSchoolRooms model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $room_id Room ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($room_id)
    {
        $model = $this->findModel($room_id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'room_id' => $model->room_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing BalingasaHighSchoolRooms model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $room_id Room ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($room_id)
    {
        $this->findModel($room_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the BalingasaHighSchoolRooms model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $room_id Room ID
     * @return BalingasaHighSchoolRooms the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($room_id)
    {
        if (($model = BalingasaHighSchoolRooms::findOne(['room_id' => $room_id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
