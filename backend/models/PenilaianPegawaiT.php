<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "penilaian_pegawai_t".
 *
 * @property int $penilaian_id
 * @property int $pegawai_id
 * @property string $tanggal_penilaian
 * @property string $pemberi_penilaian_1
 * @property string $pemberi_penilaian_2
 * @property int $skor_penilaian
 * @property string $kategori_penilaian
 * @property string $lampiran
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PegawaiM $pegawai
 */
class PenilaianPegawaiT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'penilaian_pegawai_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pegawai_id', 'skor_penilaian'], 'default', 'value' => null],
            [['pegawai_id', 'skor_penilaian'], 'integer'],
            [['tanggal_penilaian', 'pemberi_penilaian_1', 'pemberi_penilaian_2', 'skor_penilaian', 'kategori_penilaian'], 'required'],
            [['tanggal_penilaian', 'created_at', 'updated_at'], 'safe'],
            [['pemberi_penilaian_1', 'pemberi_penilaian_2', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['kategori_penilaian'], 'string', 'max' => 32],
            [['lampiran'], 'string', 'max' => 256],
            [['pegawai_id'], 'exist', 'skipOnError' => true, 'targetClass' => PegawaiM::className(), 'targetAttribute' => ['pegawai_id' => 'pegawai_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'penilaian_id' => 'Penilaian ID',
            'pegawai_id' => 'Pegawai ID',
            'tanggal_penilaian' => 'Tanggal Penilaian',
            'pemberi_penilaian_1' => 'Pemberi Penilaian 1',
            'pemberi_penilaian_2' => 'Pemberi Penilaian 2',
            'skor_penilaian' => 'Skor Penilaian',
            'kategori_penilaian' => 'Kategori Penilaian',
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
    public function getPegawai()
    {
        return $this->hasOne(PegawaiM::className(), ['pegawai_id' => 'pegawai_id']);
    }
}
