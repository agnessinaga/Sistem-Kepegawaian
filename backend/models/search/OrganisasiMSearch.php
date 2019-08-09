<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\OrganisasiM;

/**
 * OrganisasiMSearch represents the model behind the search form of `backend\models\OrganisasiM`.
 */
class OrganisasiMSearch extends OrganisasiM
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['organisasi_id', 'calon_pegawai_id'], 'integer'],
            [['nama_organisasi', 'jenis_organisasi', 'tahun_masuk', 'jabatan', 'keterangan', 'created_at', 'created_by', 'updated_at', 'updated_by', 'host_name'], 'safe'],
            [['aktif'], 'boolean'],
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
        $query = OrganisasiM::find();

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
            'organisasi_id' => $this->organisasi_id,
            'calon_pegawai_id' => $this->calon_pegawai_id,
            'tahun_masuk' => $this->tahun_masuk,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'aktif' => $this->aktif,
        ]);

        $query->andFilterWhere(['ilike', 'nama_organisasi', $this->nama_organisasi])
            ->andFilterWhere(['ilike', 'jenis_organisasi', $this->jenis_organisasi])
            ->andFilterWhere(['ilike', 'jabatan', $this->jabatan])
            ->andFilterWhere(['ilike', 'keterangan', $this->keterangan])
            ->andFilterWhere(['ilike', 'created_by', $this->created_by])
            ->andFilterWhere(['ilike', 'updated_by', $this->updated_by])
            ->andFilterWhere(['ilike', 'host_name', $this->host_name]);

        return $dataProvider;
    }
}
