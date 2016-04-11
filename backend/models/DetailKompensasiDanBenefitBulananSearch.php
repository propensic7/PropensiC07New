<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\DetailKompensasiDanBenefitBulanan;

/**
 * DetailKompensasiDanBenefitBulananSearch represents the model behind the search form about `backend\models\DetailKompensasiDanBenefitBulanan`.
 */
class DetailKompensasiDanBenefitBulananSearch extends DetailKompensasiDanBenefitBulanan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Id_KomBen', 'Id_Karyawan', 'Keterangan'], 'safe'],
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
        $query = DetailKompensasiDanBenefitBulanan::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'Jumlah' => $this->Jumlah,
        ]);

        $query->andFilterWhere(['like', 'Id_KomBen', $this->Id_KomBen])
            ->andFilterWhere(['like', 'Id_Karyawan', $this->Id_Karyawan])
            ->andFilterWhere(['like', 'Keterangan', $this->Keterangan]);

        return $dataProvider;
    }
}
