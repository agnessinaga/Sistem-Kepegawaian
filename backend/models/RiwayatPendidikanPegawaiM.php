<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayat_pendidikan_pegawai_m".
 *
 * @property int $riwayat_pendidikan_pegawai_id
 * @property int $pegawai_id
 * @property string $tingkat_pendidikan
 * @property string $nama_sekolah
 * @property string $lokasi
 * @property string $jurusan
 * @property string $tahun_masuk
 * @property string $tahun_lulus
 * @property string $no_ijazah
 * @property string $judul_tugas_akhir
 * @property double $ipk
 * @property string $lampiran
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class RiwayatPendidikanPegawaiM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_pendidikan_pegawai_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['tingkat_pendidikan', 'nama_sekolah', 'lokasi', 'jurusan', 'tahun_masuk', 'tahun_lulus', 'no_ijazah'], 'required'],
            [['lokasi', 'judul_tugas_akhir'], 'string'],
            [['tahun_masuk', 'tahun_lulus', 'created_at', 'updated_at'], 'safe'],
            [['ipk'], 'number'],
            [['tingkat_pendidikan'], 'string', 'max' => 16],
            [['nama_sekolah', 'lampiran'], 'string', 'max' => 256],
            [['jurusan', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['no_ijazah'], 'string', 'max' => 32],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'riwayat_pendidikan_pegawai_id' => 'Riwayat Pendidikan Pegawai ID',
            'pegawai_id' => 'Pegawai ID',
            'tingkat_pendidikan' => 'Tingkat Pendidikan',
            'nama_sekolah' => 'Nama Sekolah',
            'lokasi' => 'Lokasi',
            'jurusan' => 'Jurusan',
            'tahun_masuk' => 'Tahun Masuk',
            'tahun_lulus' => 'Tahun Lulus',
            'no_ijazah' => 'No Ijazah',
            'judul_tugas_akhir' => 'Judul Tugas Akhir',
            'ipk' => 'Ipk',
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
