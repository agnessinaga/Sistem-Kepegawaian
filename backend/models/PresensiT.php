<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "presensi_t".
 *
 * @property int $presensi_id
 * @property int $pegawai_id
 * @property string $tanggal_presensi
 * @property string $jam_datang
 * @property string $jam_pulang
 * @property string $jam_keluar
 * @property string $jam_masuk
 * @property string $status
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class PresensiT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'presensi_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['tanggal_presensi', 'jam_datang', 'jam_pulang', 'status'], 'required'],
            [['tanggal_presensi', 'jam_datang', 'jam_pulang', 'jam_keluar', 'jam_masuk', 'created_at', 'updated_at'], 'safe'],
            [['status'], 'string', 'max' => 16],
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
            'presensi_id' => 'Presensi ID',
            'pegawai_id' => 'Pegawai ID',
            'tanggal_presensi' => 'Tanggal Presensi',
            'jam_datang' => 'Jam Datang',
            'jam_pulang' => 'Jam Pulang',
            'jam_keluar' => 'Jam Keluar',
            'jam_masuk' => 'Jam Masuk',
            'status' => 'Status',
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
