<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\HasilKuesionerTerbukaT;

/**
 * HasilKuesionerTerbukaTSearch represents the model behind the search form of `backend\models\HasilKuesionerTerbukaT`.
 */
class HasilKuesionerTerbukaTSearch extends HasilKuesionerTerbukaT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hasil_kuesioner_terbuka_id', 'pertanyaan_kuesioner_id'], 'integer'],
            [['jawaban_kuesioner_terbuka', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = HasilKuesionerTerbukaT::find();

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
            'hasil_kuesioner_terbuka_id' => $this->hasil_kuesioner_terbuka_id,
            'pertanyaan_kuesioner_id' => $this->pertanyaan_kuesioner_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'jawaban_kuesioner_terbuka', $this->jawaban_kuesioner_terbuka])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
