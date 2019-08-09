<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pengunduran_diri_t".
 *
 * @property int $pengunduran_diri_id
 * @property int $pegawai_id
 * @property string $tanggal_pengajuan
 * @property string $alasan
 * @property string $tanggal_berlaku
 * @property string $lampiran
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM[] $pegawaiMs
 */
class PengunduranDiriT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pengunduran_diri_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['tanggal_pengajuan', 'alasan', 'tanggal_berlaku'], 'required'],
            [['tanggal_pengajuan', 'tanggal_berlaku', 'created_at', 'updated_at'], 'safe'],
            [['alasan'], 'string'],
            [['lampiran'], 'string', 'max' => 256],
            [['created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pengunduran_diri_id' => 'Pengunduran Diri ID',
            'pegawai_id' => 'Pegawai ID',
            'tanggal_pengajuan' => 'Tanggal Pengajuan',
            'alasan' => 'Alasan',
            'tanggal_berlaku' => 'Tanggal Berlaku',
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
    public function getPegawaiMs()
    {
        return $this->hasMany(PegawaiM::className(), ['pengunduran_diri_id' => 'pengunduran_diri_id']);
    }
}
