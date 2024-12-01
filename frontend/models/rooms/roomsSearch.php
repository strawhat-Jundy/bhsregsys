<?php

namespace frontend\models\rooms;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\BalingasaHighSchoolRooms;

/**
 * roomsSearch represents the model behind the search form of `frontend\models\BalingasaHighSchoolRooms`.
 */
class roomsSearch extends BalingasaHighSchoolRooms
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['room_id', 'Room_Number'], 'integer'],
            [['Room', 'Floor', 'Building', 'Description'], 'safe'],
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
        $query = BalingasaHighSchoolRooms::find();

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
            'room_id' => $this->room_id,
            'Room_Number' => $this->Room_Number,
        ]);

        $query->andFilterWhere(['like', 'Room', $this->Room])
            ->andFilterWhere(['like', 'Floor', $this->Floor])
            ->andFilterWhere(['like', 'Building', $this->Building])
            ->andFilterWhere(['like', 'Description', $this->Description]);

        return $dataProvider;
    }
}
