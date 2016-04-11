<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\KeteranganKomben;

/**
 * KeteranganKombenSearch represents the model behind the search form about `backend\models\KeteranganKomben`.
 */
class KeteranganKombenSearch extends KeteranganKomben
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Keterangan', 'Nama_Keterangan'], 'safe'],
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
        $query = KeteranganKomben::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Id_Keterangan', $this->Id_Keterangan])
            ->andFilterWhere(['like', 'Nama_Keterangan', $this->Nama_Keterangan]);

        return $dataProvider;
    }
}
