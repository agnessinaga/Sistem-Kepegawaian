<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "penugasan_m".
 *
 * @property int $penugasan_id
 * @property int $pegawai_id
 * @property string $pemberi_tugas
 * @property string $tanggal_diberikan_tugas
 * @property string $tanggal_selesai_tugas
 * @property string $lokasi_penugasan
 * @property string $isi_penugasan
 * @property string $keterangan
 * @property string $lampiran
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class PenugasanM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penugasan_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['pemberi_tugas', 'tanggal_diberikan_tugas', 'tanggal_selesai_tugas', 'lokasi_penugasan', 'isi_penugasan'], 'required'],
            [['tanggal_diberikan_tugas', 'tanggal_selesai_tugas', 'created_at', 'updated_at'], 'safe'],
            [['lokasi_penugasan', 'isi_penugasan', 'keterangan'], 'string'],
            [['pemberi_tugas', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['lampiran'], 'string', 'max' => 256],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'penugasan_id' => 'Penugasan ID',
            'pegawai_id' => 'Pegawai ID',
            'pemberi_tugas' => 'Pemberi Tugas',
            'tanggal_diberikan_tugas' => 'Tanggal Diberikan Tugas',
            'tanggal_selesai_tugas' => 'Tanggal Selesai Tugas',
            'lokasi_penugasan' => 'Lokasi Penugasan',
            'isi_penugasan' => 'Isi Penugasan',
            'keterangan' => 'Keterangan',
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
    public function getPegawai()
    {
        return $this->hasOne(PegawaiM::className(), ['pegawai_id' => 'pegawai_id']);
    }
}
