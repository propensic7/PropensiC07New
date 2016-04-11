<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "stok_bahan_baku".
 *
 * @property string $Id_Bahan_Baku
 * @property integer $Jumlah
 */
class StokBahanBaku extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'stok_bahan_baku';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Bahan_Baku', 'Jumlah'], 'required'],
            [['Jumlah'], 'integer'],
            [['Id_Bahan_Baku'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Bahan_Baku' => 'Id  Bahan  Baku',
            'Jumlah' => 'Jumlah',
        ];
    }
}
