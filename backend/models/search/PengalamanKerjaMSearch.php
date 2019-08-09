<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PengalamanKerjaM;

/**
 * PengalamanKerjaMSearch represents the model behind the search form of `backend\models\PengalamanKerjaM`.
 */
class PengalamanKerjaMSearch extends PengalamanKerjaM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pengalaman_id', 'calon_pegawai_id'], 'integer'],
            [['nama_perusahaan', 'bidang_perusahaan', 'jabatan_pengalaman', 'tanggal_masuk', 'tangal_keluar', 'lama_bekerja', 'alasan_berhenti_bekerja', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = PengalamanKerjaM::find();

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
            'pengalaman_id' => $this->pengalaman_id,
            'calon_pegawai_id' => $this->calon_pegawai_id,
            'tanggal_masuk' => $this->tanggal_masuk,
            'tangal_keluar' => $this->tangal_keluar,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['ilike', 'bidang_perusahaan', $this->bidang_perusahaan])
            ->andFilterWhere(['ilike', 'jabatan_pengalaman', $this->jabatan_pengalaman])
            ->andFilterWhere(['ilike', 'lama_bekerja', $this->lama_bekerja])
            ->andFilterWhere(['ilike', 'alasan_berhenti_bekerja', $this->alasan_berhenti_bekerja])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
