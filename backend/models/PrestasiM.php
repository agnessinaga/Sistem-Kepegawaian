<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "prestasi_m".
 *
 * @property int $prestasi_id
 * @property int $calon_pegawai_id
 * @property int $pegawai_id
 * @property string $nama_prestasi
 * @property string $tanggal_diperoleh
 * @property string $pemberi_prestasi
 * @property string $lokasi_prestasi
 * @property string $keterangan
 * @property string $lampiran
 *
 * @property CalonPegawaiM $calonPegawai
 * @property PegawaiM $pegawai
 */
class PrestasiM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'prestasi_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calon_pegawai_id', 'pegawai_id'], 'default', 'value' => null],
            [['calon_pegawai_id', 'pegawai_id'], 'integer'],
            [['nama_prestasi', 'tanggal_diperoleh', 'pemberi_prestasi', 'lokasi_prestasi', 'lampiran'], 'required'],
            [['tanggal_diperoleh'], 'safe'],
            [['lokasi_prestasi', 'keterangan'], 'string'],
            [['nama_prestasi', 'pemberi_prestasi', 'lampiran'], 'string', 'max' => 256],
            [['calon_pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => CalonPegawaiM::className(), 'targetAttribute' => ['calon_pegawai_id' => 'calon_pegawai_id']],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prestasi_id' => 'Prestasi ID',
            'calon_pegawai_id' => 'Calon Pegawai ID',
            'pegawai_id' => 'Pegawai ID',
            'nama_prestasi' => 'Nama Prestasi',
            'tanggal_diperoleh' => 'Tanggal Diperoleh',
            'pemberi_prestasi' => 'Pemberi Prestasi',
            'lokasi_prestasi' => 'Lokasi Prestasi',
            'keterangan' => 'Keterangan',
            'lampiran' => 'Lampiran',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCalonPegawai()
    {
        return $this->hasOne(CalonPegawaiM::className(), ['calon_pegawai_id' => 'calon_pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(PegawaiM::className(), ['pegawai_id' => 'pegawai_id']);
    }
}
