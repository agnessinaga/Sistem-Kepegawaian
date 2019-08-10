<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\CalonPegawaiM;

/**
 * CalonPegawaiMSearch represents the model behind the search form of `backend\models\CalonPegawaiM`.
 */
class CalonPegawaiMSearch extends CalonPegawaiM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calon_pegawai_id', 'pegawai_id', 'nik', 'no_telepon'], 'integer'],
            [['posisi_pekerjaan', 'nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'email', 'jenis_kelamin', 'golongan_darah', 'kewarganegaraan', 'pendidikan', 'skill_dan_minat', 'pengalaman_kerja', 'organisasi', 'prestasi', 'lampiran', 'foto', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = CalonPegawaiM::find();

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
            'calon_pegawai_id' => $this->calon_pegawai_id,
            'pegawai_id' => $this->pegawai_id,
            'nik' => $this->nik,
            'tanggal_lahir' => $this->tanggal_lahir,
            'no_telepon' => $this->no_telepon,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'posisi_pekerjaan', $this->posisi_pekerjaan])
            ->andFilterWhere(['ilike', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['ilike', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['ilike', 'golongan_darah', $this->golongan_darah])
            ->andFilterWhere(['ilike', 'kewarganegaraan', $this->kewarganegaraan])
            ->andFilterWhere(['ilike', 'pendidikan', $this->pendidikan])
            ->andFilterWhere(['ilike', 'skill_dan_minat', $this->skill_dan_minat])
            ->andFilterWhere(['ilike', 'pengalaman_kerja', $this->pengalaman_kerja])
            ->andFilterWhere(['ilike', 'organisasi', $this->organisasi])
            ->andFilterWhere(['ilike', 'prestasi', $this->prestasi])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'foto', $this->foto])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
