<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\PenggajianT;

/**
 * PenggajianTSearch represents the model behind the search form of `backend\models\PenggajianT`.
 */
class PenggajianTSearch extends PenggajianT
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['penggajian_id', 'pegawai_id'], 'integer'],
            [['tanggal_penggajian', 'no_penggajian', 'yang_mengetahui', 'yang_menyetujui', 'deskripsi', 'keterangan', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
            [['penerimaan', 'potongan'], 'number'],
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
        $query = PenggajianT::find();

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
            'penggajian_id' => $this->penggajian_id,
            'pegawai_id' => $this->pegawai_id,
            'tanggal_penggajian' => $this->tanggal_penggajian,
            'penerimaan' => $this->penerimaan,
            'potongan' => $this->potongan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['ilike', 'no_penggajian', $this->no_penggajian])
            ->andFilterWhere(['ilike', 'yang_mengetahui', $this->yang_mengetahui])
            ->andFilterWhere(['ilike', 'yang_menyetujui', $this->yang_menyetujui])
            ->andFilterWhere(['ilike', 'deskripsi', $this->deskripsi])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
