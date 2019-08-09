<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "laporan_l".
 *
 * @property int $laporan_id
 * @property string $nama_laporan
 */
class LaporanL extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'laporan_l';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_laporan'], 'required'],
            [['nama_laporan'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'laporan_id' => 'Laporan ID',
            'nama_laporan' => 'Nama Laporan',
        ];
    }
}
