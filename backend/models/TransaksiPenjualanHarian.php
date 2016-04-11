<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "transaksi_penjualan_harian".
 *
 * @property string $Id_Transaksi
 * @property string $Kasir
 * @property string $Timestamp_Penjualan
 */
class TransaksiPenjualanHarian extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'transaksi_penjualan_harian';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Transaksi', 'Kasir'], 'required'],
            [['Timestamp_Penjualan'], 'safe'],
            [['Id_Transaksi'], 'string', 'max' => 8],
            [['Kasir'], 'string', 'max' => 15]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Transaksi' => 'Id  Transaksi',
            'Kasir' => 'Kasir',
            'Timestamp_Penjualan' => 'Timestamp  Penjualan',
        ];
    }
}
