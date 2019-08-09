<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PertanyaanKuesionerT;

/**
 * PertanyaanKuesionerTSearch represents the model behind the search form of `backend\models\PertanyaanKuesionerT`.
 */
class PertanyaanKuesionerTSearch extends PertanyaanKuesionerT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pertanyaan_kuesioner_id', 'kuesioner_id'], 'integer'],
            [['pertanyaan_kuesioner', 'pilihan_jawaban', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = PertanyaanKuesionerT::find();

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
            'pertanyaan_kuesioner_id' => $this->pertanyaan_kuesioner_id,
            'kuesioner_id' => $this->kuesioner_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'pertanyaan_kuesioner', $this->pertanyaan_kuesioner])
            ->andFilterWhere(['ilike', 'pilihan_jawaban', $this->pilihan_jawaban])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
