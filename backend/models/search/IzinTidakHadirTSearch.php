<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\IzinTidakHadirT;

/**
 * IzinTidakHadirTSearch represents the model behind the search form of `backend\models\IzinTidakHadirT`.
 */
class IzinTidakHadirTSearch extends IzinTidakHadirT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['izin_tidak_hadir_id', 'pegawai_id'], 'integer'],
            [['tanggal_rencana_tidak_hadir', 'tanggal_rencana_kembali', 'alasan', 'lampiran', 'status', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
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
        $query = IzinTidakHadirT::find();

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
            'izin_tidak_hadir_id' => $this->izin_tidak_hadir_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_rencana_tidak_hadir' => $this->tanggal_rencana_tidak_hadir,
            'tanggal_rencana_kembali' => $this->tanggal_rencana_kembali,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'alasan', $this->alasan])
            ->andFilterWhere(['ilike', 'lampiran', $this->lampiran])
            ->andFilterWhere(['ilike', 'status', $this->status])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
