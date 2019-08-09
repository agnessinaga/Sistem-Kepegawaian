<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "izin_tidak_hadir_t".
 *
 * @property int $izin_tidak_hadir_id
 * @property int $pegawai_id
 * @property string $tanggal_rencana_tidak_hadir
 * @property string $tanggal_rencana_kembali
 * @property string $alasan
 * @property string $lampiran
 * @property string $status
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class IzinTidakHadirT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'izin_tidak_hadir_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['tanggal_rencana_tidak_hadir', 'tanggal_rencana_kembali', 'alasan', 'status'], 'required'],
            [['tanggal_rencana_tidak_hadir', 'tanggal_rencana_kembali', 'created_at', 'updated_at'], 'safe'],
            [['alasan'], 'string'],
            [['lampiran'], 'string', 'max' => 256],
            [['status'], 'string', 'max' => 16],
            [['created_by', 'updated_by', 'host_name'], 'string', 'max' => 32],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'izin_tidak_hadir_id' => 'Izin Tidak Hadir ID',
            'pegawai_id' => 'Pegawai ID',
            'tanggal_rencana_tidak_hadir' => 'Tanggal Rencana Tidak Hadir',
            'tanggal_rencana_kembali' => 'Tanggal Rencana Kembali',
            'alasan' => 'Alasan',
            'lampiran' => 'Lampiran',
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
