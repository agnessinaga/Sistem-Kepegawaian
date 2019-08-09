<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "penggajian_t".
 *
 * @property int $penggajian_id
 * @property int $pegawai_id
 * @property string $tanggal_penggajian
 * @property string $no_penggajian
 * @property string $yang_mengetahui
 * @property string $yang_menyetujui
 * @property string $deskripsi
 * @property string $penerimaan
 * @property string $potongan
 * @property string $keterangan
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class PenggajianT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penggajian_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id'], 'default', 'value' => null],
            [['pegawai_id'], 'integer'],
            [['tanggal_penggajian', 'no_penggajian', 'yang_mengetahui', 'yang_menyetujui', 'deskripsi', 'penerimaan'], 'required'],
            [['tanggal_penggajian', 'created_at', 'updated_at'], 'safe'],
            [['penerimaan', 'potongan'], 'number'],
            [['keterangan'], 'string'],
            [['no_penggajian', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['yang_mengetahui', 'yang_menyetujui'], 'string', 'max' => 128],
            [['deskripsi'], 'string', 'max' => 256],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'penggajian_id' => 'Penggajian ID',
            'pegawai_id' => 'Pegawai ID',
            'tanggal_penggajian' => 'Tanggal Penggajian',
            'no_penggajian' => 'No Penggajian',
            'yang_mengetahui' => 'Yang Mengetahui',
            'yang_menyetujui' => 'Yang Menyetujui',
            'deskripsi' => 'Deskripsi',
            'penerimaan' => 'Penerimaan',
            'potongan' => 'Potongan',
            'keterangan' => 'Keterangan',
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
