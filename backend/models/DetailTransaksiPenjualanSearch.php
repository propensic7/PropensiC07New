<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DetailTransaksiPenjualan;

/**
 * DetailTransaksiPenjualanSearch represents the model behind the search form about `backend\models\DetailTransaksiPenjualan`.
 */
class DetailTransaksiPenjualanSearch extends DetailTransaksiPenjualan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Trans', 'Jumlah_Barang'], 'integer'],
            [['Id_Detail', 'Menu'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = DetailTransaksiPenjualan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Id_Trans' => $this->Id_Trans,
            'Jumlah_Barang' => $this->Jumlah_Barang,
        ]);

        $query->andFilterWhere(['like', 'Id_Detail', $this->Id_Detail])
            ->andFilterWhere(['like', 'Menu', $this->Menu]);

        return $dataProvider;
    }
}
