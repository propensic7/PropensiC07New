<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "detail_kompensasi_dan_benefit_bulanan".
 *
 * @property string $Id_KomBen
 * @property string $Id_Karyawan
 * @property string $Keterangan
 * @property integer $Jumlah
 */
class DetailKompensasiDanBenefitBulanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'detail_kompensasi_dan_benefit_bulanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_KomBen', 'Id_Karyawan', 'Keterangan', 'Jumlah'], 'required'],
            [['Jumlah'], 'integer'],
            [['Id_KomBen', 'Id_Karyawan'], 'string', 'max' => 8],
            [['Keterangan'], 'string', 'max' => 4]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'Id_KomBen' => 'Id  Kom Ben',
            'Id_Karyawan' => 'Id  Karyawan',
            'Keterangan' => 'Keterangan',
            'Jumlah' => 'Jumlah',
        ];
    }
}
