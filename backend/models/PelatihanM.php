<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pelatihan_m".
 *
 * @property int $riwayat_pelatihan_id
 * @property int $calon_pegawai_id
 * @property int $pegawai_id
 * @property string $nama_pelatihan
 * @property string $tanggal_pelaksanaan
 * @property string $tanggal_selesai
 * @property string $tempat_pelaksanaan
 * @property string $keterangan_pelatihan
 * @property string $lampiran
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property CalonPegawaiM $calonPegawai
 * @property PegawaiM $pegawai
 */
class PelatihanM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pelatihan_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calon_pegawai_id', 'pegawai_id'], 'default', 'value' => null],
            [['calon_pegawai_id', 'pegawai_id'], 'integer'],
            [['nama_pelatihan', 'tanggal_pelaksanaan', 'tanggal_selesai', 'tempat_pelaksanaan'], 'required'],
            [['tanggal_pelaksanaan', 'tanggal_selesai', 'created_at', 'updated_at'], 'safe'],
            [['keterangan_pelatihan'], 'string'],
            [['nama_pelatihan', 'lampiran'], 'string', 'max' => 256],
            [['tempat_pelaksanaan', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
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
            'riwayat_pelatihan_id' => 'Riwayat Pelatihan ID',
            'calon_pegawai_id' => 'Calon Pegawai ID',
            'pegawai_id' => 'Pegawai ID',
            'nama_pelatihan' => 'Nama Pelatihan',
            'tanggal_pelaksanaan' => 'Tanggal Pelaksanaan',
            'tanggal_selesai' => 'Tanggal Selesai',
            'tempat_pelaksanaan' => 'Tempat Pelaksanaan',
            'keterangan_pelatihan' => 'Keterangan Pelatihan',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPegawai()
    {
        return $this->hasOne(PegawaiM::className(), ['pegawai_id' => 'pegawai_id']);
    }
}
