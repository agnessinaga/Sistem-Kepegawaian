<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\IzinKeluarT;

/**
 * IzinKeluarTSearch represents the model behind the search form of `backend\models\IzinKeluarT`.
 */
class IzinKeluarTSearch extends IzinKeluarT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['izin_keluar_id', 'pegawai_id'], 'integer'],
            [['tanggal_rencana_keluar', 'jam_izin_keluar', 'tanggal_rencana_kembali', 'jam_kembali', 'alasan', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = IzinKeluarT::find();

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
            'izin_keluar_id' => $this->izin_keluar_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_rencana_keluar' => $this->tanggal_rencana_keluar,
            'jam_izin_keluar' => $this->jam_izin_keluar,
            'tanggal_rencana_kembali' => $this->tanggal_rencana_kembali,
            'jam_kembali' => $this->jam_kembali,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'alasan', $this->alasan])
            ->andFilterWhere(['ilike', 'status', $this->status])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
