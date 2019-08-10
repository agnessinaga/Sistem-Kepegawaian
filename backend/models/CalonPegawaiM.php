<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "calon_pegawai_m".
 *
 * @property int $calon_pegawai_id
 * @property int $pegawai_id
 * @property string $posisi_pekerjaan
 * @property string $nama_lengkap
 * @property int $nik
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property int $no_telepon
 * @property string $email
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $golongan_darah
 * @property string $kewarganegaraan
 * @property string $pendidikan
 * @property string $skill_dan_minat
 * @property string $pengalaman_kerja
 * @property string $organisasi
 * @property string $prestasi
 * @property string $lampiran
 * @property string $foto
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 * @property OrganisasiM[] $organisasiMs
 * @property PelatihanM[] $pelatihanMs
 * @property PendidikanCalonPegawaiM[] $pendidikanCalonPegawaiMs
 * @property PengalamanKerjaM[] $pengalamanKerjaMs
 * @property PrestasiM[] $prestasiMs
 */
class CalonPegawaiM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $cv;
    public $image;

    public static function tableName()
    {
        return 'calon_pegawai_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'nik', 'no_telepon'], 'default', 'value' => null],
            [['pegawai_id', 'nik', 'no_telepon'], 'integer'],
            [['posisi_pekerjaan', 'nama_lengkap', 'nik', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_telepon', 'email', 'jenis_kelamin', 'golongan_darah', 'kewarganegaraan', 'pendidikan', 'skill_dan_minat', 'agama'], 'required'],
            [['tanggal_lahir', 'created_at', 'updated_at'], 'safe'],
            [['alamat'], 'string'],
            [['posisi_pekerjaan', 'jenis_kelamin', 'kewarganegaraan'], 'string', 'max' => 16],
            [['nama_lengkap', 'tempat_lahir', 'pendidikan', 'created_by', 'updated_by', 'host_name', 'foto', 'agama'], 'string', 'max' => 64],
            [['email'], 'string', 'max' => 128],
            [['golongan_darah'], 'string', 'max' => 2],
            [['skill_dan_minat', 'pengalaman_kerja', 'organisasi', 'prestasi', 'lampiran'], 'string', 'max' => 256],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
            [['cv', 'image'], 'safe'],
            [['cv'], 'file', 'extensions' => 'doc, docx, pdf'],
            [['image'], 'file', 'extensions' => 'jpg, jpeg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'calon_pegawai_id' => 'ID Calon Pegawai',
            // 'pegawai_id' => 'ID Pegawai',
            'posisi_pekerjaan' => 'Posisi Pekerjaan',
            'nama_lengkap' => 'Nama Lengkap',
            'nik' => 'NIK',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'no_telepon' => 'No Telepon',
            'email' => 'Email',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'golongan_darah' => 'Golongan Darah',
            'kewarganegaraan' => 'Kewarganegaraan',
            'pendidikan' => 'Pendidikan',
            'skill_dan_minat' => 'Skill Dan Minat',
            'pengalaman_kerja' => 'Pengalaman Kerja',
            'organisasi' => 'Organisasi',
            'prestasi' => 'Prestasi',
            'cv' => 'Lampiran',
            'image' => 'Foto',
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
 
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrganisasiMs()
    {
        return $this->hasMany(OrganisasiM::className(), ['calon_pegawai_id' => 'calon_pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelatihanMs()
    {
        return $this->hasMany(PelatihanM::className(), ['calon_pegawai_id' => 'calon_pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPendidikanCalonPegawaiMs()
    {
        return $this->hasMany(PendidikanCalonPegawaiM::className(), ['calon_pegawai_id' => 'calon_pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengalamanKerjaMs()
    {
        return $this->hasMany(PengalamanKerjaM::className(), ['calon_pegawai_id' => 'calon_pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestasiMs()
    {
        return $this->hasMany(PrestasiM::className(), ['calon_pegawai_id' => 'calon_pegawai_id']);
    }

}
