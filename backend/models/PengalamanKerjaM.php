<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengalaman_kerja_m".
 *
 * @property int $pengalaman_id
 * @property int $calon_pegawai_id
 * @property string $nama_perusahaan
 * @property string $bidang_perusahaan
 * @property string $jabatan_pengalaman
 * @property string $tanggal_masuk
 * @property string $tangal_keluar
 * @property string $lama_bekerja
 * @property string $alasan_berhenti_bekerja
 * @property string $lampiran
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property CalonPegawaiM $calonPegawai
 */
class PengalamanKerjaM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengalaman_kerja_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calon_pegawai_id'], 'default', 'value' => null],
            [['calon_pegawai_id'], 'integer'],
            [['nama_perusahaan', 'bidang_perusahaan', 'jabatan_pengalaman', 'tanggal_masuk', 'tangal_keluar', 'lama_bekerja', 'alasan_berhenti_bekerja'], 'required'],
            [['tanggal_masuk', 'tangal_keluar', 'created_at', 'updated_at'], 'safe'],
            [['alasan_berhenti_bekerja'], 'string'],
            [['nama_perusahaan', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['bidang_perusahaan', 'jabatan_pengalaman'], 'string', 'max' => 32],
            [['lama_bekerja'], 'string', 'max' => 16],
            [['lampiran'], 'string', 'max' => 256],
            [['calon_pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => CalonPegawaiM::className(), 'targetAttribute' => ['calon_pegawai_id' => 'calon_pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pengalaman_id' => 'Pengalaman ID',
            'calon_pegawai_id' => 'Calon Pegawai ID',
            'nama_perusahaan' => 'Nama Perusahaan',
            'bidang_perusahaan' => 'Bidang Perusahaan',
            'jabatan_pengalaman' => 'Jabatan Pengalaman',
            'tanggal_masuk' => 'Tanggal Masuk',
            'tangal_keluar' => 'Tangal Keluar',
            'lama_bekerja' => 'Lama Bekerja',
            'alasan_berhenti_bekerja' => 'Alasan Berhenti Bekerja',
            'lampiran' => 'Lampiran',
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
    public function getCalonPegawai()
    {
        return $this->hasOne(CalonPegawaiM::className(), ['calon_pegawai_id' => 'calon_pegawai_id']);
    }
}
