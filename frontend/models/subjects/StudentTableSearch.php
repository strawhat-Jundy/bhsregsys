<?php

namespace frontend\models\subjects;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TblOfficialSubjects;

/**
 * StudentTableSearch represents the model behind the search form of `frontend\models\TblOfficialSubjects`.
 */
class StudentTableSearch extends TblOfficialSubjects
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['subject_id'], 'integer'],
            [['subject_name', 'schedule_day', 'schedule_time', 'room'], 'safe'],
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
        $query = TblOfficialSubjects::find();

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
            'subject_id' => $this->subject_id,
        ]);

        $query->andFilterWhere(['like', 'subject_name', $this->subject_name])
            ->andFilterWhere(['like', 'schedule_day', $this->schedule_day])
            ->andFilterWhere(['like', 'schedule_time', $this->schedule_time])
            ->andFilterWhere(['like', 'room', $this->room]);

        return $dataProvider;
    }
}
