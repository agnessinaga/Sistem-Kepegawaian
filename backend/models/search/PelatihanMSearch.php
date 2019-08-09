<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PelatihanM;

/**
 * PelatihanMSearch represents the model behind the search form of `backend\models\PelatihanM`.
 */
class PelatihanMSearch extends PelatihanM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['riwayat_pelatihan_id', 'calon_pegawai_id', 'pegawai_id'], 'integer'],
            [['nama_pelatihan', 'tanggal_pelaksanaan', 'tanggal_selesai', 'tempat_pelaksanaan', 'keterangan_pelatihan', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = PelatihanM::find();

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
            'riwayat_pelatihan_id' => $this->riwayat_pelatihan_id,
            'calon_pegawai_id' => $this->calon_pegawai_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_pelaksanaan' => $this->tanggal_pelaksanaan,
            'tanggal_selesai' => $this->tanggal_selesai,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'nama_pelatihan', $this->nama_pelatihan])
            ->andFilterWhere(['ilike', 'tempat_pelaksanaan', $this->tempat_pelaksanaan])
            ->andFilterWhere(['ilike', 'keterangan_pelatihan', $this->keterangan_pelatihan])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
