<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "pertanyaan_kuesioner_t".
 *
 * @property int $pertanyaan_kuesioner_id
 * @property int $kuesioner_id
 * @property string $pertanyaan_kuesioner
 * @property string $pilihan_jawaban
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property HasilKuesionerTerbukaT[] $hasilKuesionerTerbukaTs
 * @property HasilKuesionerTertutupT[] $hasilKuesionerTertutupTs
 * @property KuesionerT $kuesioner
 */
class PertanyaanKuesionerT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'pertanyaan_kuesioner_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kuesioner_id'], 'default', 'value' => null],
            [['kuesioner_id'], 'integer'],
            [['pertanyaan_kuesioner', 'pilihan_jawaban'], 'required'],
            [['pertanyaan_kuesioner'], 'string'],
            [['created_at', 'updated_at'], 'safe'],
            [['pilihan_jawaban'], 'string', 'max' => 16],
            [['created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['kuesioner_id'], 'exist', 'skipOnError' => true, 'targetClass' => KuesionerT::className(), 'targetAttribute' => ['kuesioner_id' => 'kuesioner_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'pertanyaan_kuesioner_id' => 'Pertanyaan Kuesioner ID',
            'kuesioner_id' => 'Kuesioner ID',
            'pertanyaan_kuesioner' => 'Pertanyaan Kuesioner',
            'pilihan_jawaban' => 'Pilihan Jawaban',
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
    public function getHasilKuesionerTerbukaTs()
    {
        return $this->hasMany(HasilKuesionerTerbukaT::className(), ['pertanyaan_kuesioner_id' => 'pertanyaan_kuesioner_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getHasilKuesionerTertutupTs()
    {
        return $this->hasMany(HasilKuesionerTertutupT::className(), ['pertanyaan_kuesioner_id' => 'pertanyaan_kuesioner_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKuesioner()
    {
        return $this->hasOne(KuesionerT::className(), ['kuesioner_id' => 'kuesioner_id']);
    }
}
