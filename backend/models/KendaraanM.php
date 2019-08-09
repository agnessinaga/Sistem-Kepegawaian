<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kendaraan_m".
 *
 * @property int $kendaraan_id
 * @property int $pegawai_id
 * @property string $jenis_kendaraan
 * @property string $nama_kendaraan
 * @property string $tahun_kendaraan
 * @property string $no_kendaraan
 * @property string $cc_mesin_kendaraan
 * @property string $keterangan
 *
 * @property PegawaiM $pegawai
 */
class KendaraanM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kendaraan_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['jenis_kendaraan', 'nama_kendaraan', 'tahun_kendaraan', 'no_kendaraan', 'cc_mesin_kendaraan'], 'required'],
            [['tahun_kendaraan'], 'safe'],
            [['keterangan'], 'string'],
            [['jenis_kendaraan'], 'string', 'max' => 64],
            [['nama_kendaraan'], 'string', 'max' => 128],
            [['no_kendaraan'], 'string', 'max' => 10],
            [['cc_mesin_kendaraan'], 'string', 'max' => 16],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kendaraan_id' => 'Kendaraan ID',
            'pegawai_id' => 'Pegawai ID',
            'jenis_kendaraan' => 'Jenis Kendaraan',
            'nama_kendaraan' => 'Nama Kendaraan',
            'tahun_kendaraan' => 'Tahun Kendaraan',
            'no_kendaraan' => 'No Kendaraan',
            'cc_mesin_kendaraan' => 'Cc Mesin Kendaraan',
            'keterangan' => 'Keterangan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(PegawaiM::className(), ['pegawai_id' => 'pegawai_id']);
    }
}
