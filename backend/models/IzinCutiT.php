<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "izin_cuti_t".
 *
 * @property int $cuti_id
 * @property int $pegawai_id
 * @property string $tanggal_rencana_cuti
 * @property string $tanggal_kembali_cuti
 * @property string $alasan
 * @property string $sisa_cuti
 * @property string $lampiran
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 * @property string $jenis_cuti
 * @property string $status_cuti
 *
 * @property PegawaiM $pegawai
 */
class IzinCutiT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public $file;

    public static function tableName()
    {
        return 'izin_cuti_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['tanggal_rencana_cuti', 'tanggal_kembali_cuti', 'alasan', 'sisa_cuti', 'jenis_cuti'], 'required'],
            [['tanggal_rencana_cuti', 'tanggal_kembali_cuti', 'created_at', 'updated_at'], 'safe'],
            [['alasan'], 'string'],
            [['sisa_cuti'], 'string', 'max' => 8],
            [['lampiran'], 'string', 'max' => 256],
            [['created_by', 'updated_by', 'host_name', 'jenis_cuti', 'status_cuti'], 'string', 'max' => 64],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
            [['file'], 'safe'],
            [['file'], 'file', 'skipOnEmpty' => true, 'extensions' => 'doc, docx, pdf, jpg, jpeg, png'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cuti_id' => 'ID Cuti',
            'pegawai_id' => 'ID Pegawai',
            'jenis_cuti' => 'Jenis Cuti',
            'tanggal_rencana_cuti' => 'Tanggal Rencana Cuti',
            'tanggal_kembali_cuti' => 'Tanggal Kembali Cuti',
            'alasan' => 'Alasan',
            'sisa_cuti' => 'Sisa Cuti',
            'status_cuti' => 'Status Cuti',
            'file' => 'Lampiran',
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
