<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "kalender_m".
 *
 * @property int $kalender_id
 * @property int $pegawai_id
 * @property string $judul_kegiatan
 * @property string $tanggal_kegiatan
 * @property string $waktu_pelaksanaan
 * @property string $alamat_kegiatan
 * @property string $isi_kegiatan
 * @property string $keterangan_kegiatan
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class KalenderM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kalender_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['judul_kegiatan', 'tanggal_kegiatan', 'waktu_pelaksanaan', 'alamat_kegiatan', 'isi_kegiatan'], 'required'],
            [['tanggal_kegiatan', 'waktu_pelaksanaan', 'created_at', 'updated_at'], 'safe'],
            [['alamat_kegiatan', 'isi_kegiatan', 'keterangan_kegiatan'], 'string'],
            [['judul_kegiatan'], 'string', 'max' => 256],
            [['created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kalender_id' => 'Kalender ID',
            'pegawai_id' => 'Pegawai ID',
            'judul_kegiatan' => 'Judul Kegiatan',
            'tanggal_kegiatan' => 'Tanggal Kegiatan',
            'waktu_pelaksanaan' => 'Waktu Pelaksanaan',
            'alamat_kegiatan' => 'Alamat Kegiatan',
            'isi_kegiatan' => 'Isi Kegiatan',
            'keterangan_kegiatan' => 'Keterangan Kegiatan',
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
}
