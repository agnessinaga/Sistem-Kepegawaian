<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengumuman_t".
 *
 * @property int $pengumuman_id
 * @property int $pegawai_id
 * @property string $judul_pengumuman
 * @property string $tanggal_pelaksanaan
 * @property string $waktu_pelaksanaan
 * @property string $tempat_pelaksanaan
 * @property string $isi_pengumuman
 * @property string $lampiran
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class PengumumanT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengumuman_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['judul_pengumuman', 'tanggal_pelaksanaan', 'tempat_pelaksanaan', 'isi_pengumuman'], 'required'],
            [['tanggal_pelaksanaan', 'waktu_pelaksanaan', 'created_at', 'updated_at'], 'safe'],
            [['isi_pengumuman'], 'string'],
            [['judul_pengumuman', 'tempat_pelaksanaan', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
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
            'pengumuman_id' => 'Pengumuman ID',
            'pegawai_id' => 'Pegawai ID',
            'judul_pengumuman' => 'Judul Pengumuman',
            'tanggal_pelaksanaan' => 'Tanggal Pelaksanaan',
            'waktu_pelaksanaan' => 'Waktu Pelaksanaan',
            'tempat_pelaksanaan' => 'Tempat Pelaksanaan',
            'isi_pengumuman' => 'Isi Pengumuman',
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
