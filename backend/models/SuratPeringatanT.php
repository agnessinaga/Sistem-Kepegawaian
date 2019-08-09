<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "surat_peringatan_t".
 *
 * @property int $surat_peringatan_id
 * @property int $pegawai_id
 * @property string $no_surat
 * @property string $tanggal_surat_peringatan
 * @property string $masa_berlaku
 * @property string $jenis_surat_peringatan
 * @property string $kategori_pelanggaran
 * @property string $isi_surat_peringatan
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
class SuratPeringatanT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'surat_peringatan_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['no_surat', 'tanggal_surat_peringatan', 'masa_berlaku', 'jenis_surat_peringatan', 'kategori_pelanggaran', 'isi_surat_peringatan'], 'required'],
            [['tanggal_surat_peringatan', 'masa_berlaku', 'created_at', 'updated_at'], 'safe'],
            [['isi_surat_peringatan', 'keterangan'], 'string'],
            [['no_surat'], 'string', 'max' => 32],
            [['jenis_surat_peringatan', 'kategori_pelanggaran'], 'string', 'max' => 16],
            [['lampiran'], 'string', 'max' => 256],
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
            'surat_peringatan_id' => 'Surat Peringatan ID',
            'pegawai_id' => 'Pegawai ID',
            'no_surat' => 'No Surat',
            'tanggal_surat_peringatan' => 'Tanggal Surat Peringatan',
            'masa_berlaku' => 'Masa Berlaku',
            'jenis_surat_peringatan' => 'Jenis Surat Peringatan',
            'kategori_pelanggaran' => 'Kategori Pelanggaran',
            'isi_surat_peringatan' => 'Isi Surat Peringatan',
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
