<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "organisasi_m".
 *
 * @property int $organisasi_id
 * @property int $calon_pegawai_id
 * @property string $nama_organisasi
 * @property string $jenis_organisasi
 * @property string $tahun_masuk
 * @property string $jabatan
 * @property string $keterangan
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 * @property bool $aktif
 *
 * @property CalonPegawaiM $calonPegawai
 */
class OrganisasiM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organisasi_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calon_pegawai_id'], 'default', 'value' => null],
            [['calon_pegawai_id'], 'integer'],
            [['nama_organisasi', 'jenis_organisasi', 'tahun_masuk', 'jabatan', 'aktif'], 'required'],
            [['tahun_masuk', 'created_at', 'updated_at'], 'safe'],
            [['keterangan'], 'string'],
            [['aktif'], 'boolean'],
            [['nama_organisasi', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['jenis_organisasi', 'jabatan'], 'string', 'max' => 32],
            [['calon_pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => CalonPegawaiM::className(), 'targetAttribute' => ['calon_pegawai_id' => 'calon_pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'organisasi_id' => 'Organisasi ID',
            'calon_pegawai_id' => 'Calon Pegawai ID',
            'nama_organisasi' => 'Nama Organisasi',
            'jenis_organisasi' => 'Jenis Organisasi',
            'tahun_masuk' => 'Tahun Masuk',
            'jabatan' => 'Jabatan',
            'keterangan' => 'Keterangan',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'host_name' => 'Host Name',
            'aktif' => 'Aktif',
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
