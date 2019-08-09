<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\ProfilPerusahaanM;

/**
 * ProfilPerusahaanMSearch represents the model behind the search form of `backend\models\ProfilPerusahaanM`.
 */
class ProfilPerusahaanMSearch extends ProfilPerusahaanM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['perusahaan_id', 'no_telepon'], 'integer'],
            [['tahun_profil_perusahaan', 'nama_perusahaan', 'nama_direktur', 'alamat', 'no_surat_izin', 'tanggal_surat_izin', 'oleh_surat_izin', 'masa_berlaku_surat_izin', 'tahun_diresmikan', 'motto', 'visi', 'misi', 'logo_perusahaan', 'npwp', 'no_faksimili', 'website', 'email', 'negara', 'perusahaan_pusat', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = ProfilPerusahaanM::find();

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
            'perusahaan_id' => $this->perusahaan_id,
            'tahun_profil_perusahaan' => $this->tahun_profil_perusahaan,
            'tanggal_surat_izin' => $this->tanggal_surat_izin,
            'tahun_diresmikan' => $this->tahun_diresmikan,
            'no_telepon' => $this->no_telepon,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'nama_perusahaan', $this->nama_perusahaan])
            ->andFilterWhere(['ilike', 'nama_direktur', $this->nama_direktur])
            ->andFilterWhere(['ilike', 'alamat', $this->alamat])
            ->andFilterWhere(['ilike', 'no_surat_izin', $this->no_surat_izin])
            ->andFilterWhere(['ilike', 'oleh_surat_izin', $this->oleh_surat_izin])
            ->andFilterWhere(['ilike', 'masa_berlaku_surat_izin', $this->masa_berlaku_surat_izin])
            ->andFilterWhere(['ilike', 'motto', $this->motto])
            ->andFilterWhere(['ilike', 'visi', $this->visi])
            ->andFilterWhere(['ilike', 'misi', $this->misi])
            ->andFilterWhere(['ilike', 'logo_perusahaan', $this->logo_perusahaan])
            ->andFilterWhere(['ilike', 'npwp', $this->npwp])
            ->andFilterWhere(['ilike', 'no_faksimili', $this->no_faksimili])
            ->andFilterWhere(['ilike', 'website', $this->website])
            ->andFilterWhere(['ilike', 'email', $this->email])
            ->andFilterWhere(['ilike', 'negara', $this->negara])
            ->andFilterWhere(['ilike', 'perusahaan_pusat', $this->perusahaan_pusat])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
