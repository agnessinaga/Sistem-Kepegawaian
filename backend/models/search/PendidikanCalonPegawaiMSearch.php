<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PendidikanCalonPegawaiM;

/**
 * PendidikanCalonPegawaiMSearch represents the model behind the search form of `backend\models\PendidikanCalonPegawaiM`.
 */
class PendidikanCalonPegawaiMSearch extends PendidikanCalonPegawaiM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pendidikan_calon_pegawai_id', 'calon_pegawai_id'], 'integer'],
            [['tingkat_pendidikan', 'nama_sekolah', 'lokasi', 'jurusan', 'tahun_masuk', 'tahun_lulus', 'no_ijazah', 'judul_tugas_akhir', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
            [['ipk'], 'number'],
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
        $query = PendidikanCalonPegawaiM::find();

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
            'pendidikan_calon_pegawai_id' => $this->pendidikan_calon_pegawai_id,
            'calon_pegawai_id' => $this->calon_pegawai_id,
            'tahun_masuk' => $this->tahun_masuk,
            'tahun_lulus' => $this->tahun_lulus,
            'ipk' => $this->ipk,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'tingkat_pendidikan', $this->tingkat_pendidikan])
            ->andFilterWhere(['ilike', 'nama_sekolah', $this->nama_sekolah])
            ->andFilterWhere(['ilike', 'lokasi', $this->lokasi])
            ->andFilterWhere(['ilike', 'jurusan', $this->jurusan])
            ->andFilterWhere(['ilike', 'no_ijazah', $this->no_ijazah])
            ->andFilterWhere(['ilike', 'judul_tugas_akhir', $this->judul_tugas_akhir])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
