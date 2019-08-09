<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pendidikan_calon_pegawai_m".
 *
 * @property int $pendidikan_calon_pegawai_id
 * @property int $calon_pegawai_id
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
 * @property CalonPegawaiM $calonPegawai
 */
class PendidikanCalonPegawaiM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pendidikan_calon_pegawai_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['calon_pegawai_id'], 'default', 'value' => null],
            [['calon_pegawai_id'], 'integer'],
            [['tingkat_pendidikan', 'nama_sekolah', 'lokasi', 'jurusan', 'tahun_masuk', 'tahun_lulus', 'no_ijazah'], 'required'],
            [['lokasi', 'judul_tugas_akhir'], 'string'],
            [['tahun_masuk', 'tahun_lulus', 'created_at', 'updated_at'], 'safe'],
            [['ipk'], 'number'],
            [['tingkat_pendidikan'], 'string', 'max' => 16],
            [['nama_sekolah', 'jurusan', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['no_ijazah'], 'string', 'max' => 32],
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
            'pendidikan_calon_pegawai_id' => 'Pendidikan Calon Pegawai ID',
            'calon_pegawai_id' => 'Calon Pegawai ID',
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
    public function getCalonPegawai()
    {
        return $this->hasOne(CalonPegawaiM::className(), ['calon_pegawai_id' => 'calon_pegawai_id']);
    }
}
