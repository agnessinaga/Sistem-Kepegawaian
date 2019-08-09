<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PengumumanT;

/**
 * PengumumanTSearch represents the model behind the search form of `backend\models\PengumumanT`.
 */
class PengumumanTSearch extends PengumumanT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pengumuman_id', 'pegawai_id'], 'integer'],
            [['judul_pengumuman', 'tanggal_pelaksanaan', 'waktu_pelaksanaan', 'tempat_pelaksanaan', 'isi_pengumuman', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = PengumumanT::find();

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
            'pengumuman_id' => $this->pengumuman_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_pelaksanaan' => $this->tanggal_pelaksanaan,
            'waktu_pelaksanaan' => $this->waktu_pelaksanaan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'judul_pengumuman', $this->judul_pengumuman])
            ->andFilterWhere(['ilike', 'tempat_pelaksanaan', $this->tempat_pelaksanaan])
            ->andFilterWhere(['ilike', 'isi_pengumuman', $this->isi_pengumuman])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
