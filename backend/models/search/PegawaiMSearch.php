<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PegawaiM;

/**
 * PegawaiMSearch represents the model behind the search form of `backend\models\PegawaiM`.
 */
class PegawaiMSearch extends PegawaiM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'pengunduran_diri_id', 'nip', 'nik', 'no_telepon'], 'integer'],
            [['nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'jenis_kelamin', 'agama', 'golongan_darah', 'kewarganegaraan', 'pendidikan', 'status_pernikahan', 'posisi_pekerjaan', 'tanggal_mulai_bekerja', 'npwp', 'tanggal_terdaftar_npwp', 'no_bpjs_kesehatan', 'no_bpjs_ketenagakerjaan', 'pelatihan', 'prestasi', 'status_pegawai', 'foto', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
            [['aktif'], 'boolean'],
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
        $query = PegawaiM::find();

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
            'pegawai_id' => $this->pegawai_id,
            'pengunduran_diri_id' => $this->pengunduran_diri_id,
            'nip' => $this->nip,
            'nik' => $this->nik,
            'tanggal_lahir' => $this->tanggal_lahir,
            'no_telepon' => $this->no_telepon,
            'tanggal_mulai_bekerja' => $this->tanggal_mulai_bekerja,
            'tanggal_terdaftar_npwp' => $this->tanggal_terdaftar_npwp,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'aktif' => $this->aktif,
        ]);

        $query->andFilterWhere(['ilike', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['ilike', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['ilike', 'agama', $this->agama])
            ->andFilterWhere(['ilike', 'golongan_darah', $this->golongan_darah])
            ->andFilterWhere(['ilike', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['ilike', 'pendidikan', $this->pendidikan])
            ->andFilterWhere(['ilike', 'status_pernikahan', $this->status_pernikahan])
            ->andFilterWhere(['ilike', 'posisi_pekerjaan', $this->posisi_pekerjaan])
            ->andFilterWhere(['ilike', 'npwp', $this->npwp])
            ->andFilterWhere(['ilike', 'no_bpjs_kesehatan', $this->no_bpjs_kesehatan])
            ->andFilterWhere(['ilike', 'no_bpjs_ketenagakerjaan', $this->no_bpjs_ketenagakerjaan])
            ->andFilterWhere(['ilike', 'pelatihan', $this->pelatihan])
            ->andFilterWhere(['ilike', 'prestasi', $this->prestasi])
            ->andFilterWhere(['ilike', 'status_pegawai', $this->status_pegawai])
            ->andFilterWhere(['ilike', 'foto', $this->foto])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
