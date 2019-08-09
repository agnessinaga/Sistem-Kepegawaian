<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "riwayat_keluarga_m".
 *
 * @property int $keluarga_id
 * @property int $pegawai_id
 * @property string $nama_lengkap
 * @property int $nik
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property int $no_telepon
 * @property string $golongan_darah
 * @property string $jenis_kelamin
 * @property string $agama
 * @property string $pekerjaan
 * @property string $status_keluarga
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class RiwayatKeluargaM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'riwayat_keluarga_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'nik', 'no_telepon'], 'default', 'value' => null],
            [['pegawai_id', 'nik', 'no_telepon'], 'integer'],
            [['nama_lengkap', 'nik', 'tempat_lahir', 'tanggal_lahir', 'no_telepon', 'golongan_darah', 'jenis_kelamin', 'agama', 'pekerjaan', 'status_keluarga'], 'required'],
            [['tanggal_lahir', 'created_at', 'updated_at'], 'safe'],
            [['nama_lengkap', 'tempat_lahir', 'pekerjaan', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['golongan_darah'], 'string', 'max' => 2],
            [['jenis_kelamin', 'agama', 'status_keluarga'], 'string', 'max' => 16],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'keluarga_id' => 'Keluarga ID',
            'pegawai_id' => 'Pegawai ID',
            'nama_lengkap' => 'Nama Lengkap',
            'nik' => 'Nik',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'no_telepon' => 'No Telepon',
            'golongan_darah' => 'Golongan Darah',
            'jenis_kelamin' => 'Jenis Kelamin',
            'agama' => 'Agama',
            'pekerjaan' => 'Pekerjaan',
            'status_keluarga' => 'Status Keluarga',
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
