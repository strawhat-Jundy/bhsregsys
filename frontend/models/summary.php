<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TblOfficialSummary;

/**
 * summary represents the model behind the search form of `frontend\models\TblOfficialSummary`.
 */
class summary extends TblOfficialSummary
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['summary_id', 'Schedule_ID', 'subject_id', 'teacher_id', 'room_id', 'status_id', 'weekday_id', 'time_id'], 'integer'],
            [['student_ids'], 'safe'],
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

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblOfficialSummary::find();

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
            'summary_id' => $this->summary_id,
            'Schedule_ID' => $this->Schedule_ID,
            'subject_id' => $this->subject_id,
            'teacher_id' => $this->teacher_id,
            'room_id' => $this->room_id,
            'status_id' => $this->status_id,
            'weekday_id' => $this->weekday_id,
            'time_id' => $this->time_id,
        ]);

        $query->andFilterWhere(['like', 'student_ids', $this->student_ids]);

        return $dataProvider;
    }
}
