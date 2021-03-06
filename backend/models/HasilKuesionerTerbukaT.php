<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "hasil_kuesioner_terbuka_t".
 *
 * @property int $hasil_kuesioner_terbuka_id
 * @property int $pertanyaan_kuesioner_id
 * @property string $jawaban_kuesioner_terbuka
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 *
 * @property PertanyaanKuesionerT $pertanyaanKuesioner
 */
class HasilKuesionerTerbukaT extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'hasil_kuesioner_terbuka_t';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pertanyaan_kuesioner_id'], 'default', 'value' => null],
            [['pertanyaan_kuesioner_id'], 'integer'],
            [['jawaban_kuesioner_terbuka'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['jawaban_kuesioner_terbuka'], 'string', 'max' => 256],
            [['created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
            [['pertanyaan_kuesioner_id'], 'exist', 'skipOnError' => true, 'targetClass' => PertanyaanKuesionerT::className(), 'targetAttribute' => ['pertanyaan_kuesioner_id' => 'pertanyaan_kuesioner_id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'hasil_kuesioner_terbuka_id' => 'Hasil Kuesioner Terbuka ID',
            'pertanyaan_kuesioner_id' => 'Pertanyaan Kuesioner ID',
            'jawaban_kuesioner_terbuka' => 'Jawaban Kuesioner Terbuka',
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
    public function getPertanyaanKuesioner()
    {
        return $this->hasOne(PertanyaanKuesionerT::className(), ['pertanyaan_kuesioner_id' => 'pertanyaan_kuesioner_id']);
    }
}
