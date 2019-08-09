<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "lookup_m".
 *
 * @property int $lookup_id
 * @property string $lookup_type
 * @property string $lookup_name
 * @property string $lookup_value
 * @property int $lookup_urutan
 * @property string $lookup_kode
 * @property bool $lookup_aktif
 * @property string $created_at
 * @property string $created_by
 * @property string $updated_at
 * @property string $updated_by
 * @property string $host_name
 */
class LookupM extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lookup_m';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['lookup_type', 'lookup_name', 'lookup_value', 'lookup_urutan', 'lookup_aktif'], 'required'],
            [['lookup_urutan'], 'default', 'value' => null],
            [['lookup_urutan'], 'integer'],
            [['lookup_aktif'], 'boolean'],
            [['created_at', 'updated_at'], 'safe'],
            [['lookup_type'], 'string', 'max' => 128],
            [['lookup_name', 'lookup_value'], 'string', 'max' => 256],
            [['lookup_kode', 'created_by', 'updated_by', 'host_name'], 'string', 'max' => 64],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'lookup_id' => 'Lookup ID',
            'lookup_type' => 'Lookup Type',
            'lookup_name' => 'Lookup Name',
            'lookup_value' => 'Lookup Value',
            'lookup_urutan' => 'Lookup Urutan',
            'lookup_kode' => 'Lookup Kode',
            'lookup_aktif' => 'Lookup Aktif',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
            'host_name' => 'Host Name',
        ];
    }
}
