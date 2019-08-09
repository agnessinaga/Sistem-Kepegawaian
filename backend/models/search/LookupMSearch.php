<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\LookupM;

/**
 * LookupMSearch represents the model behind the search form of `backend\models\LookupM`.
 */
class LookupMSearch extends LookupM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lookup_id', 'lookup_urutan'], 'integer'],
            [['lookup_type', 'lookup_name', 'lookup_value', 'lookup_kode', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
            [['lookup_aktif'], 'boolean'],
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
        $query = LookupM::find();

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
            'lookup_id' => $this->lookup_id,
            'lookup_urutan' => $this->lookup_urutan,
            'lookup_aktif' => $this->lookup_aktif,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'lookup_type', $this->lookup_type])
            ->andFilterWhere(['ilike', 'lookup_name', $this->lookup_name])
            ->andFilterWhere(['ilike', 'lookup_value', $this->lookup_value])
            ->andFilterWhere(['ilike', 'lookup_kode', $this->lookup_kode])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
