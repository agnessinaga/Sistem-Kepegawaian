<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PenugasanM;

/**
 * PenugasanMSearch represents the model behind the search form of `backend\models\PenugasanM`.
 */
class PenugasanMSearch extends PenugasanM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penugasan_id', 'pegawai_id'], 'integer'],
            [['pemberi_tugas', 'tanggal_diberikan_tugas', 'tanggal_selesai_tugas', 'lokasi_penugasan', 'isi_penugasan', 'keterangan', 'lampiran', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = PenugasanM::find();

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
            'penugasan_id' => $this->penugasan_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_diberikan_tugas' => $this->tanggal_diberikan_tugas,
            'tanggal_selesai_tugas' => $this->tanggal_selesai_tugas,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'pemberi_tugas', $this->pemberi_tugas])
            ->andFilterWhere(['ilike', 'lokasi_penugasan', $this->lokasi_penugasan])
            ->andFilterWhere(['ilike', 'isi_penugasan', $this->isi_penugasan])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
