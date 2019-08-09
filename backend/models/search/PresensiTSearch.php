<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PresensiT;

/**
 * PresensiTSearch represents the model behind the search form of `backend\models\PresensiT`.
 */
class PresensiTSearch extends PresensiT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['presensi_id', 'pegawai_id'], 'integer'],
            [['tanggal_presensi', 'jam_datang', 'jam_pulang', 'jam_keluar', 'jam_masuk', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = PresensiT::find();

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
            'presensi_id' => $this->presensi_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_presensi' => $this->tanggal_presensi,
            'jam_datang' => $this->jam_datang,
            'jam_pulang' => $this->jam_pulang,
            'jam_keluar' => $this->jam_keluar,
            'jam_masuk' => $this->jam_masuk,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'status', $this->status])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
