<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PengunduranDiriT;

/**
 * PengunduranDiriTSearch represents the model behind the search form of `backend\models\PengunduranDiriT`.
 */
class PengunduranDiriTSearch extends PengunduranDiriT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pengunduran_diri_id', 'pegawai_id'], 'integer'],
            [['tanggal_pengajuan', 'alasan', 'tanggal_berlaku', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = PengunduranDiriT::find();

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
            'pengunduran_diri_id' => $this->pengunduran_diri_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_pengajuan' => $this->tanggal_pengajuan,
            'tanggal_berlaku' => $this->tanggal_berlaku,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'alasan', $this->alasan])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
