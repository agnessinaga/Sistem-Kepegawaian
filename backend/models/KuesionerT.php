<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kuesioner_t".
 *
 * @property int $kuesioner_id
 * @property int $pegawai_id
 * @property string $nama_kuesioner
 * @property string $pertanyaan
 * @property string $tanggal_pembuatan
 * @property string $kategori
 * @property string $status
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 * @property PertanyaanKuesionerT[] $pertanyaanKuesionerTs
 */
class KuesionerT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kuesioner_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['nama_kuesioner', 'pertanyaan', 'tanggal_pembuatan', 'kategori', 'status'], 'required'],
            [['tanggal_pembuatan', 'created_at', 'updated_at'], 'safe'],
            [['nama_kuesioner', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['pertanyaan'], 'string', 'max' => 256],
            [['kategori'], 'string', 'max' => 32],
            [['status'], 'string', 'max' => 16],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kuesioner_id' => 'Kuesioner ID',
            'pegawai_id' => 'Pegawai ID',
            'nama_kuesioner' => 'Nama Kuesioner',
            'pertanyaan' => 'Pertanyaan',
            'tanggal_pembuatan' => 'Tanggal Pembuatan',
            'kategori' => 'Kategori',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'host_name' => 'Host Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(PegawaiM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPertanyaanKuesionerTs()
    {
        return $this->hasMany(PertanyaanKuesionerT::className(), ['kuesioner_id' => 'kuesioner_id']);
    }
}
