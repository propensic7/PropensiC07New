<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\StokBahanBaku;

/**
 * StokBahanBakuSearch represents the model behind the search form about `backend\models\StokBahanBaku`.
 */
class StokBahanBakuSearch extends StokBahanBaku
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Bahan_Baku'], 'safe'],
            [['Jumlah'], 'integer'],
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
        $query = StokBahanBaku::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Jumlah' => $this->Jumlah,
        ]);

        $query->andFilterWhere(['like', 'Id_Bahan_Baku', $this->Id_Bahan_Baku]);

        return $dataProvider;
    }
}
