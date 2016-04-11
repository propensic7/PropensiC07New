<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\JenisPengeluaranHarian;

/**
 * JenisPengeluaranHarianSearch represents the model behind the search form about `backend\models\JenisPengeluaranHarian`.
 */
class JenisPengeluaranHarianSearch extends JenisPengeluaranHarian
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_Jenis', 'Nama_Pengeluaran'], 'safe'],
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
        $query = JenisPengeluaranHarian::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'Id_Jenis', $this->Id_Jenis])
            ->andFilterWhere(['like', 'Nama_Pengeluaran', $this->Nama_Pengeluaran]);

        return $dataProvider;
    }
}
