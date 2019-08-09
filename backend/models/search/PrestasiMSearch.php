<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PrestasiM;

/**
 * PrestasiMSearch represents the model behind the search form of `backend\models\PrestasiM`.
 */
class PrestasiMSearch extends PrestasiM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prestasi_id', 'calon_pegawai_id', 'pegawai_id'], 'integer'],
            [['nama_prestasi', 'tanggal_diperoleh', 'pemberi_prestasi', 'lokasi_prestasi', 'keterangan', 'lampiran'], 'safe'],
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
        $query = PrestasiM::find();

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
            'prestasi_id' => $this->prestasi_id,
            'calon_pegawai_id' => $this->calon_pegawai_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_diperoleh' => $this->tanggal_diperoleh,
        ]);

        $query->andFilterWhere(['ilike', 'nama_prestasi', $this->nama_prestasi])
            ->andFilterWhere(['ilike', 'pemberi_prestasi', $this->pemberi_prestasi])
            ->andFilterWhere(['ilike', 'lokasi_prestasi', $this->lokasi_prestasi])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran]);

        return $dataProvider;
    }
}
