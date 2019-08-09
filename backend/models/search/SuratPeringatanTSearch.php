<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\SuratPeringatanT;

/**
 * SuratPeringatanTSearch represents the model behind the search form of `backend\models\SuratPeringatanT`.
 */
class SuratPeringatanTSearch extends SuratPeringatanT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['surat_peringatan_id', 'pegawai_id'], 'integer'],
            [['no_surat', 'tanggal_surat_peringatan', 'masa_berlaku', 'jenis_surat_peringatan', 'kategori_pelanggaran', 'isi_surat_peringatan', 'keterangan', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = SuratPeringatanT::find();

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
            'surat_peringatan_id' => $this->surat_peringatan_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_surat_peringatan' => $this->tanggal_surat_peringatan,
            'masa_berlaku' => $this->masa_berlaku,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'no_surat', $this->no_surat])
            ->andFilterWhere(['ilike', 'jenis_surat_peringatan', $this->jenis_surat_peringatan])
            ->andFilterWhere(['ilike', 'kategori_pelanggaran', $this->kategori_pelanggaran])
            ->andFilterWhere(['ilike', 'isi_surat_peringatan', $this->isi_surat_peringatan])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
