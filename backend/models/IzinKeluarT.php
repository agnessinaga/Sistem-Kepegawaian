<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "izin_keluar_t".
 *
 * @property int $izin_keluar_id
 * @property int $pegawai_id
 * @property string $tanggal_rencana_keluar
 * @property string $jam_izin_keluar
 * @property string $tanggal_rencana_kembali
 * @property string $jam_kembali
 * @property string $alasan
 * @property string $status
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class IzinKeluarT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'izin_keluar_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['tanggal_rencana_keluar', 'jam_izin_keluar', 'tanggal_rencana_kembali', 'jam_kembali', 'alasan'], 'required'],
            [['tanggal_rencana_keluar', 'jam_izin_keluar', 'tanggal_rencana_kembali', 'jam_kembali', 'created_at', 'updated_at'], 'safe'],
            [['alasan'], 'string'],
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
            'izin_keluar_id' => 'Izin Keluar ID',
            'pegawai_id' => 'Pegawai ID',
            'tanggal_rencana_keluar' => 'Tanggal Rencana Keluar',
            'jam_izin_keluar' => 'Jam Izin Keluar',
            'tanggal_rencana_kembali' => 'Tanggal Rencana Kembali',
            'jam_kembali' => 'Jam Kembali',
            'alasan' => 'Alasan',
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
