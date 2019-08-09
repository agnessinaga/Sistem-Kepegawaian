<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KalenderM;

/**
 * KalenderMSearch represents the model behind the search form of `backend\models\KalenderM`.
 */
class KalenderMSearch extends KalenderM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kalender_id', 'pegawai_id'], 'integer'],
            [['judul_kegiatan', 'tanggal_kegiatan', 'waktu_pelaksanaan', 'alamat_kegiatan', 'isi_kegiatan', 'keterangan_kegiatan', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = KalenderM::find();

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
            'kalender_id' => $this->kalender_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_kegiatan' => $this->tanggal_kegiatan,
            'waktu_pelaksanaan' => $this->waktu_pelaksanaan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'judul_kegiatan', $this->judul_kegiatan])
            ->andFilterWhere(['ilike', 'alamat_kegiatan', $this->alamat_kegiatan])
            ->andFilterWhere(['ilike', 'isi_kegiatan', $this->isi_kegiatan])
            ->andFilterWhere(['ilike', 'keterangan_kegiatan', $this->keterangan_kegiatan])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
