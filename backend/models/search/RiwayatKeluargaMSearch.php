<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\RiwayatKeluargaM;

/**
 * RiwayatKeluargaMSearch represents the model behind the search form of `backend\models\RiwayatKeluargaM`.
 */
class RiwayatKeluargaMSearch extends RiwayatKeluargaM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['keluarga_id', 'pegawai_id', 'nik', 'no_telepon'], 'integer'],
            [['nama_lengkap', 'tempat_lahir', 'tanggal_lahir', 'golongan_darah', 'jenis_kelamin', 'agama', 'pekerjaan', 'status_keluarga', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = RiwayatKeluargaM::find();

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
            'keluarga_id' => $this->keluarga_id,
            'pegawai_id' => $this->pegawai_id,
            'nik' => $this->nik,
            'tanggal_lahir' => $this->tanggal_lahir,
            'no_telepon' => $this->no_telepon,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'nama_lengkap', $this->nama_lengkap])
            ->andFilterWhere(['ilike', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['ilike', 'golongan_darah', $this->golongan_darah])
            ->andFilterWhere(['ilike', 'jenis_kelamin', $this->jenis_kelamin])
            ->andFilterWhere(['ilike', 'agama', $this->agama])
            ->andFilterWhere(['ilike', 'pekerjaan', $this->pekerjaan])
            ->andFilterWhere(['ilike', 'status_keluarga', $this->status_keluarga])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
