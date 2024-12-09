<?php

namespace frontend\models\subject;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BalingasaHighSchoolSubjects;

/**
 * SubjectsSearch represents the model behind the search form of `frontend\models\BalingasaHighSchoolSubjects`.
 */
class SubjectsSearch extends BalingasaHighSchoolSubjects
{
    public $teacher_name; // Virtual attribute for searching by teacher name

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'teacher_id'], 'integer'],
            [['subject_name', 'teacher_name'], 'safe'], // `safe` is used for non-integer attributes
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // Bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        // Define the query and join with the teachers table
        $query = BalingasaHighSchoolSubjects::find()
            ->alias('subject') // Alias for readability
            ->joinWith('teacher teacher') // Ensure `teacher` is a defined relation in the model
            ->select(['subject.*', "CONCAT(teacher.first_name, ' ', teacher.last_name) AS teacher_name"]);

        // Define the data provider
        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        // Configure sorting for `teacher_name`
        $dataProvider->sort->attributes['teacher_name'] = [
            'asc' => ["CONCAT(teacher.first_name, ' ', teacher.last_name)" => SORT_ASC],
            'desc' => ["CONCAT(teacher.first_name, ' ', teacher.last_name)" => SORT_DESC],
        ];

        // Load search parameters
        $this->load($params);

        // Validate search parameters
        if (!$this->validate()) {
            // If validation fails, return no records
            $query->where('0=1');
            return $dataProvider;
        }

        // Apply filters to the query
        $query->andFilterWhere(['subject.id' => $this->id])
            ->andFilterWhere(['subject.teacher_id' => $this->teacher_id])
            ->andFilterWhere(['like', 'subject.subject_name', $this->subject_name]);

        // Add support for filtering by `teacher_name`
        if (!empty($this->teacher_name)) {
            $query->andWhere([
                'like',
                new \yii\db\Expression("CONCAT(teacher.first_name, ' ', teacher.last_name)"),
                $this->teacher_name
            ]);
        }

        return $dataProvider;
    }h
}








/*<?php

namespace frontend\models\subject;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BalingasaHighSchoolSubjects;

/**
 * subjectsSearch represents the model behind the search form of `frontend\models\BalingasaHighSchoolSubjects`.
 
class subjectsSearch extends BalingasaHighSchoolSubjects
{
    /**
     * {@inheritdoc}
     
    public function rules()
    {
        return [
            [['subject_id'], 'integer'],
            [['subject_name', 'schedule_day', 'schedule_time', 'room'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     
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
     
    public function search($params)
    {
        $query = BalingasaHighSchoolSubjects::find();

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
