<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TransaksiPenjualanHarian;

/**
 * TransaksiPenjualanHarianSearch represents the model behind the search form about `backend\models\TransaksiPenjualanHarian`.
 */
class TransaksiPenjualanHarianSearch extends TransaksiPenjualanHarian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Transaksi', 'Kasir', 'Timestamp_Penjualan'], 'safe'],
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
        $query = TransaksiPenjualanHarian::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Timestamp_Penjualan' => $this->Timestamp_Penjualan,
        ]);

        $query->andFilterWhere(['like', 'Id_Transaksi', $this->Id_Transaksi])
            ->andFilterWhere(['like', 'Kasir', $this->Kasir]);

        return $dataProvider;
    }
}
