<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PenilaianPegawaiT;

/**
 * PenilaianPegawaiTSearch represents the model behind the search form of `backend\models\PenilaianPegawaiT`.
 */
class PenilaianPegawaiTSearch extends PenilaianPegawaiT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penilaian_id', 'pegawai_id', 'skor_penilaian'], 'integer'],
            [['tanggal_penilaian', 'pemberi_penilaian_1', 'pemberi_penilaian_2', 'kategori_penilaian', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = PenilaianPegawaiT::find();

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
            'penilaian_id' => $this->penilaian_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_penilaian' => $this->tanggal_penilaian,
            'skor_penilaian' => $this->skor_penilaian,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'pemberi_penilaian_1', $this->pemberi_penilaian_1])
            ->andFilterWhere(['ilike', 'pemberi_penilaian_2', $this->pemberi_penilaian_2])
            ->andFilterWhere(['ilike', 'kategori_penilaian', $this->kategori_penilaian])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
