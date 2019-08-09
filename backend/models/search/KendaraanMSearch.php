<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KendaraanM;

/**
 * KendaraanMSearch represents the model behind the search form of `backend\models\KendaraanM`.
 */
class KendaraanMSearch extends KendaraanM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kendaraan_id', 'pegawai_id'], 'integer'],
            [['jenis_kendaraan', 'nama_kendaraan', 'tahun_kendaraan', 'no_kendaraan', 'cc_mesin_kendaraan', 'keterangan'], 'safe'],
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
        $query = KendaraanM::find();

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
            'kendaraan_id' => $this->kendaraan_id,
            'pegawai_id' => $this->pegawai_id,
            'tahun_kendaraan' => $this->tahun_kendaraan,
        ]);

        $query->andFilterWhere(['ilike', 'jenis_kendaraan', $this->jenis_kendaraan])
            ->andFilterWhere(['ilike', 'nama_kendaraan', $this->nama_kendaraan])
            ->andFilterWhere(['ilike', 'no_kendaraan', $this->no_kendaraan])
            ->andFilterWhere(['ilike', 'cc_mesin_kendaraan', $this->cc_mesin_kendaraan])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
