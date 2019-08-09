<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "profil_perusahaan_m".
 *
 * @property int $perusahaan_id
 * @property string $tahun_profil_perusahaan
 * @property string $nama_perusahaan
 * @property string $nama_direktur
 * @property string $alamat
 * @property string $no_surat_izin
 * @property string $tanggal_surat_izin
 * @property string $oleh_surat_izin
 * @property string $masa_berlaku_surat_izin
 * @property string $tahun_diresmikan
 * @property string $motto
 * @property string $visi
 * @property string $misi
 * @property string $logo_perusahaan
 * @property string $npwp
 * @property string $no_faksimili
 * @property string $website
 * @property string $email
 * @property int $no_telepon
 * @property string $negara
 * @property string $perusahaan_pusat
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 */
class ProfilPerusahaanM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'profil_perusahaan_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tahun_profil_perusahaan', 'nama_perusahaan', 'nama_direktur', 'alamat', 'no_surat_izin', 'tanggal_surat_izin', 'oleh_surat_izin', 'masa_berlaku_surat_izin', 'tahun_diresmikan', 'motto', 'visi', 'misi', 'logo_perusahaan', 'npwp', 'no_faksimili', 'website', 'email', 'no_telepon', 'negara'], 'required'],
            [['tahun_profil_perusahaan', 'tanggal_surat_izin', 'tahun_diresmikan', 'created_at', 'updated_at'], 'safe'],
            [['alamat', 'motto', 'visi', 'misi'], 'string'],
            [['no_telepon'], 'default', 'value' => null],
            [['no_telepon'], 'integer'],
            [['nama_perusahaan', 'nama_direktur', 'website', 'email', 'perusahaan_pusat'], 'string', 'max' => 255],
            [['no_surat_izin', 'masa_berlaku_surat_izin', 'no_faksimili'], 'string', 'max' => 16],
            [['oleh_surat_izin', 'negara', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['logo_perusahaan'], 'string', 'max' => 256],
            [['npwp'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'perusahaan_id' => 'Perusahaan ID',
            'tahun_profil_perusahaan' => 'Tahun Profil Perusahaan',
            'nama_perusahaan' => 'Nama Perusahaan',
            'nama_direktur' => 'Nama Direktur',
            'alamat' => 'Alamat',
            'no_surat_izin' => 'No Surat Izin',
            'tanggal_surat_izin' => 'Tanggal Surat Izin',
            'oleh_surat_izin' => 'Oleh Surat Izin',
            'masa_berlaku_surat_izin' => 'Masa Berlaku Surat Izin',
            'tahun_diresmikan' => 'Tahun Diresmikan',
            'motto' => 'Motto',
            'visi' => 'Visi',
            'misi' => 'Misi',
            'logo_perusahaan' => 'Logo Perusahaan',
            'npwp' => 'Npwp',
            'no_faksimili' => 'No Faksimili',
            'website' => 'Website',
            'email' => 'Email',
            'no_telepon' => 'No Telepon',
            'negara' => 'Negara',
            'perusahaan_pusat' => 'Perusahaan Pusat',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'host_name' => 'Host Name',
        ];
    }
}
