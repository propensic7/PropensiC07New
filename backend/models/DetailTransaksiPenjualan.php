<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detail_transaksi_penjualan".
 *
 * @property integer $Id_Trans
 * @property string $Id_Detail
 * @property string $Menu
 * @property integer $Jumlah_Barang
 */
class DetailTransaksiPenjualan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_transaksi_penjualan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Trans', 'Id_Detail', 'Menu', 'Jumlah_Barang'], 'required'],
            [['Id_Trans', 'Jumlah_Barang'], 'integer'],
            [['Id_Detail', 'Menu'], 'string', 'max' => 8]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_Trans' => 'Id  Trans',
            'Id_Detail' => 'Id  Detail',
            'Menu' => 'Menu',
            'Jumlah_Barang' => 'Jumlah  Barang',
        ];
    }
}
