<?php

namespace frontend\models\schedule;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BHSSchedule;

/**
 * scheduleSearch represents the model behind the search form of `frontend\models\BHSSchedule`.
 */
class scheduleSearch extends BHSSchedule
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Schedule_ID', 'subject_id', 'teacher_id', 'room_id', 'student_id'], 'integer'],
            [['Status', 'Day_Schedule', 'Time_Schedule', 'Room'], 'safe'],
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
        $query = BHSSchedule::find();

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
        ]);

        $query->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Day_Schedule', $this->Day_Schedule])
            ->andFilterWhere(['like', 'Time_Schedule', $this->Time_Schedule])
            ->andFilterWhere(['like', 'Room', $this->Room]);

        return $dataProvider;
    }
}
