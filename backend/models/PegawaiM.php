<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pegawai_m".
 *
 * @property int $pegawai_id
 * @property int $pengunduran_diri_id
 * @property int $nip
 * @property string $nama_lengkap
 * @property int $nik
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property int $no_telepon
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $golongan_darah
 * @property string $kewarganegaraan
 * @property string $pendidikan
 * @property string $status_pernikahan
 * @property string $posisi_pekerjaan
 * @property string $tanggal_mulai_bekerja
 * @property string $npwp
 * @property string $tanggal_terdaftar_npwp
 * @property string $no_bpjs_kesehatan
 * @property string $no_bpjs_ketenagakerjaan
 * @property string $pelatihan
 * @property string $prestasi
 * @property string $status_pegawai
 * @property string $foto
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 * @property bool $aktif
 *
 * @property CalonPegawaiM[] $calonPegawaiMs
 * @property IzinCutiT[] $izinCutiTs
 * @property IzinKeluarT[] $izinKeluarTs
 * @property IzinTidakHadirT[] $izinTidakHadirTs
 * @property KalenderM[] $kalenderMs
 * @property KendaraanM[] $kendaraanMs
 * @property KuesionerT[] $kuesionerTs
 * @property PengunduranDiriT $pengunduranDiri
 * @property PelatihanM[] $pelatihanMs
 * @property PenggajianT[] $penggajianTs
 * @property PengumumanT[] $pengumumanTs
 * @property PenilaianPegawaiT[] $penilaianPegawaiTs
 * @property PenugasanM[] $penugasanMs
 * @property PresensiT[] $presensiTs
 * @property PrestasiM[] $prestasiMs
 * @property RiwayatKeluargaM[] $riwayatKeluargaMs
 * @property RiwayatPendidikanPegawaiM[] $riwayatPendidikanPegawaiMs
 * @property SuratPeringatanT[] $suratPeringatanTs
 */
class PegawaiM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pegawai_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pengunduran_diri_id', 'nip', 'nik', 'no_telepon'], 'default', 'value' => null],
            [['pengunduran_diri_id', 'nip', 'nik', 'no_telepon'], 'integer'],
            [['nip', 'nama_lengkap', 'nik', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_telepon', 'jenis_kelamin', 'agama', 'golongan_darah', 'kewarganegaraan', 'pendidikan', 'status_pernikahan', 'posisi_pekerjaan', 'tanggal_mulai_bekerja', 'npwp', 'tanggal_terdaftar_npwp', 'status_pegawai', 'foto', 'aktif'], 'required'],
            [['tanggal_lahir', 'tanggal_mulai_bekerja', 'tanggal_terdaftar_npwp', 'created_at', 'updated_at'], 'safe'],
            [['alamat'], 'string'],
            [['aktif'], 'boolean'],
            [['nama_lengkap', 'tempat_lahir', 'pendidikan', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['jenis_kelamin', 'agama', 'kewarganegaraan', 'status_pernikahan', 'posisi_pekerjaan', 'no_bpjs_kesehatan', 'no_bpjs_ketenagakerjaan', 'status_pegawai'], 'string', 'max' => 16],
            [['golongan_darah'], 'string', 'max' => 2],
            [['npwp'], 'string', 'max' => 25],
            [['pelatihan', 'prestasi'], 'string', 'max' => 256],
            [['foto'], 'string', 'max' => 254],
            [['pengunduran_diri_id'], 'exist', 'skipOnError' => true, 'targetClass' => PengunduranDiriT::className(), 'targetAttribute' => ['pengunduran_diri_id' => 'pengunduran_diri_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pegawai_id' => 'Pegawai ID',
            'pengunduran_diri_id' => 'Pengunduran Diri ID',
            'nip' => 'Nip',
            'nama_lengkap' => 'Nama Lengkap',
            'nik' => 'Nik',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'no_telepon' => 'No Telepon',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'golongan_darah' => 'Golongan Darah',
            'kewarganegaraan' => 'Kewarganegaraan',
            'pendidikan' => 'Pendidikan',
            'status_pernikahan' => 'Status Pernikahan',
            'posisi_pekerjaan' => 'Posisi Pekerjaan',
            'tanggal_mulai_bekerja' => 'Tanggal Mulai Bekerja',
            'npwp' => 'Npwp',
            'tanggal_terdaftar_npwp' => 'Tanggal Terdaftar Npwp',
            'no_bpjs_kesehatan' => 'No Bpjs Kesehatan',
            'no_bpjs_ketenagakerjaan' => 'No Bpjs Ketenagakerjaan',
            'pelatihan' => 'Pelatihan',
            'prestasi' => 'Prestasi',
            'status_pegawai' => 'Status Pegawai',
            'foto' => 'Foto',
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
    public function getCalonPegawaiMs()
    {
        return $this->hasMany(CalonPegawaiM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinCutiTs()
    {
        return $this->hasMany(IzinCutiT::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinKeluarTs()
    {
        return $this->hasMany(IzinKeluarT::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIzinTidakHadirTs()
    {
        return $this->hasMany(IzinTidakHadirT::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKalenderMs()
    {
        return $this->hasMany(KalenderM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKendaraanMs()
    {
        return $this->hasMany(KendaraanM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuesionerTs()
    {
        return $this->hasMany(KuesionerT::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengunduranDiri()
    {
        return $this->hasOne(PengunduranDiriT::className(), ['pengunduran_diri_id' => 'pengunduran_diri_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPelatihanMs()
    {
        return $this->hasMany(PelatihanM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenggajianTs()
    {
        return $this->hasMany(PenggajianT::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPengumumanTs()
    {
        return $this->hasMany(PengumumanT::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenilaianPegawaiTs()
    {
        return $this->hasMany(PenilaianPegawaiT::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPenugasanMs()
    {
        return $this->hasMany(PenugasanM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPresensiTs()
    {
        return $this->hasMany(PresensiT::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPrestasiMs()
    {
        return $this->hasMany(PrestasiM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatKeluargaMs()
    {
        return $this->hasMany(RiwayatKeluargaM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getRiwayatPendidikanPegawaiMs()
    {
        return $this->hasMany(RiwayatPendidikanPegawaiM::className(), ['pegawai_id' => 'pegawai_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSuratPeringatanTs()
    {
        return $this->hasMany(SuratPeringatanT::className(), ['pegawai_id' => 'pegawai_id']);
    }
}
