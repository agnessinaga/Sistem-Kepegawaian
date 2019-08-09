<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\HasilKuesionerTertutupT;

/**
 * HasilKuesionerTertutupTSearch represents the model behind the search form of `backend\models\HasilKuesionerTertutupT`.
 */
class HasilKuesionerTertutupTSearch extends HasilKuesionerTertutupT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['hasil_kuesioner_tertutup_id', 'pertanyaan_kuesioner_id'], 'integer'],
            [['jawaban_kuesioner_tertutup', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = HasilKuesionerTertutupT::find();

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
            'hasil_kuesioner_tertutup_id' => $this->hasil_kuesioner_tertutup_id,
            'pertanyaan_kuesioner_id' => $this->pertanyaan_kuesioner_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'jawaban_kuesioner_tertutup', $this->jawaban_kuesioner_tertutup])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
