<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inventory;

/**
 * InventorySearch represents the model behind the search form of `app\models\Inventory`.
 */
class InventorySearch extends Inventory
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product_id', 'bb_unit', 'strip_unit', 'tcv_unit'], 'integer'],
            [['bb_cost', 'strip_cost', 'tcv_cost', 'bb_price', 'strip_price', 'tcv_price'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Inventory::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'product_id' => $this->product_id,
            'bb_unit' => $this->bb_unit,
            'strip_unit' => $this->strip_unit,
            'tcv_unit' => $this->tcv_unit,
            'bb_cost' => $this->bb_cost,
            'strip_cost' => $this->strip_cost,
            'tcv_cost' => $this->tcv_cost,
            'bb_price' => $this->bb_price,
            'strip_price' => $this->strip_price,
            'tcv_price' => $this->tcv_price,
        ]);

        return $dataProvider;
    }
}
