<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\IzinCutiT;

/**
 * IzinCutiTSearch represents the model behind the search form of `backend\models\IzinCutiT`.
 */
class IzinCutiTSearch extends IzinCutiT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cuti_id', 'pegawai_id'], 'integer'],
            [['tanggal_rencana_cuti', 'tanggal_kembali_cuti', 'alasan', 'sisa_cuti', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name', 'jenis_cuti', 'status_cuti'], 'safe'],
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
        $query = IzinCutiT::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['cuti_id' => SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'cuti_id' => $this->cuti_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_rencana_cuti' => $this->tanggal_rencana_cuti,
            'tanggal_kembali_cuti' => $this->tanggal_kembali_cuti,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'alasan', $this->alasan])
            ->andFilterWhere(['ilike', 'sisa_cuti', $this->sisa_cuti])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name])
            ->andFilterWhere(['ilike', 'jenis_cuti', $this->jenis_cuti])
            ->andFilterWhere(['ilike', 'status_cuti', $this->status_cuti]);

        return $dataProvider;
    }
}
