<?php

namespace frontend\models\subject;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Subject;

/**
 * Search represents the model behind the search form of `frontend\models\Subject`.
 */
class Search extends Subject
{
    public $teacher_name;
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'teacher_id'], 'integer'],
            [['subject_name', 'teacher_name'], 'safe'],
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
        $query = Subject::find()
            ->joinWith('teacher') // Join with teacher to access first_name and last_name
            ->select(['subject.*', "CONCAT(teacher.first_name, ' ', teacher.last_name) AS teacher_name"]);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->sort->attributes['teacher_name'] = [
            'asc' => ['teacher_name' => SORT_ASC],
            'desc' => ['teacher_name' => SORT_DESC],
        ];

        $this->load($params);

        if (!$this->validate()) {
            $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['id' => $this->id])
            ->andFilterWhere(['like', 'subject_name', $this->subject_name])
            ->andFilterWhere(['like', "CONCAT(teacher.first_name, ' ', teacher.last_name)", $this->teacher_name]);

        return $dataProvider;
    }
}
