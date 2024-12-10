<?php

namespace frontend\models\students;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TblOfficialStudents;

/**
 * studentsSearch represents the model behind the search form of `frontend\models\TblOfficialStudents`.
 */
class studentsSearch extends TblOfficialStudents
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['student_id'], 'integer'],
            [['lrn', 'first_name', 'last_name', 'gender', 'birthdate', 'place_of_birth', 'address', 'religion', 'email', 'civil_status', 'nationality', 'language', 'middle_name'], 'safe'],
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
        $query = TblOfficialStudents::find();

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
            'student_id' => $this->student_id,
            'birthdate' => $this->birthdate,
        ]);

        $query->andFilterWhere(['like', 'lrn', $this->lrn])
            ->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name])
            ->andFilterWhere(['like', 'gender', $this->gender])
            ->andFilterWhere(['like', 'place_of_birth', $this->place_of_birth])
            ->andFilterWhere(['like', 'address', $this->address])
            ->andFilterWhere(['like', 'religion', $this->religion])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'civil_status', $this->civil_status])
            ->andFilterWhere(['like', 'nationality', $this->nationality])
            ->andFilterWhere(['like', 'language', $this->language])
            ->andFilterWhere(['like', 'middle_name', $this->middle_name]);

        return $dataProvider;
    }
}
