<?php

namespace frontend\models\teacher;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BalingasaHighSchoolTeachers;

/**
 * teachersSearch represents the model behind the search form of `frontend\models\BalingasaHighSchoolTeachers`.
 */
class teachersSearch extends BalingasaHighSchoolTeachers
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['teacher_id'], 'integer'],
            [['first_name', 'last_name'], 'safe'],
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
        $query = BalingasaHighSchoolTeachers::find();

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
            'teacher_id' => $this->teacher_id,
        ]);

        $query->andFilterWhere(['like', 'first_name', $this->first_name])
            ->andFilterWhere(['like', 'last_name', $this->last_name]);

        return $dataProvider;
    }
}
