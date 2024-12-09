<?php

namespace frontend\models\schedule;
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TblOfficialFinalSchedule;

/**
 * scheduleSearch represents the model behind the search form of `frontend\models\TblOfficialFinalSchedule`.
 */
class scheduleSearch extends TblOfficialFinalSchedule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Schedule_ID', 'subject_id', 'teacher_id', 'room_id', 'student_id', 'status_id', 'weekday_id', 'time_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }
    //dagdag
    public function attributes()
{
    return array_merge(parent::attributes(), ['subject.subject_name', 'teacher.teacher_name']);
}
//dagdag


    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblOfficialFinalSchedule::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'Schedule_ID' => $this->Schedule_ID,
            'subject_id' => $this->subject_id,
            'teacher_id' => $this->teacher_id,
            'room_id' => $this->room_id,
            'student_id' => $this->student_id,
            'status_id' => $this->status_id,
            'weekday_id' => $this->weekday_id,
            'time_id' => $this->time_id,
        ]);

        return $dataProvider;
    }
}
