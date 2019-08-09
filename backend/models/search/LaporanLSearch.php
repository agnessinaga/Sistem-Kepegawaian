<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\LaporanL;

/**
 * LaporanLSearch represents the model behind the search form of `backend\models\LaporanL`.
 */
class LaporanLSearch extends LaporanL
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['laporan_id'], 'integer'],
            [['nama_laporan'], 'safe'],
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
        $query = LaporanL::find();

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
            'laporan_id' => $this->laporan_id,
        ]);

        $query->andFilterWhere(['ilike', 'nama_laporan', $this->nama_laporan]);

        return $dataProvider;
    }
}
