<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "keterangan_komben".
 *
 * @property string $Id_Keterangan
 * @property string $Nama_Keterangan
 */
class KeteranganKomben extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'keterangan_komben';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Keterangan', 'Nama_Keterangan'], 'required'],
            [['Id_Keterangan'], 'string', 'max' => 4],
            [['Nama_Keterangan'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Keterangan' => 'Id  Keterangan',
            'Nama_Keterangan' => 'Nama  Keterangan',
        ];
    }
}
