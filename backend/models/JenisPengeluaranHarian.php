<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "jenis_pengeluaran_harian".
 *
 * @property string $Id_Jenis
 * @property string $Nama_Pengeluaran
 */
class JenisPengeluaranHarian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'jenis_pengeluaran_harian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Jenis', 'Nama_Pengeluaran'], 'required'],
            [['Id_Jenis'], 'string', 'max' => 4],
            [['Nama_Pengeluaran'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Jenis' => 'Id  Jenis',
            'Nama_Pengeluaran' => 'Nama  Pengeluaran',
        ];
    }
}
