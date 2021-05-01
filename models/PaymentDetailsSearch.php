<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PaymentDetails;

/**
 * PaymentDetailsSearch represents the model behind the search form of `app\models\PaymentDetails`.
 */
class PaymentDetailsSearch extends PaymentDetails
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'order_id', 'product_id', 'quantity_ordered'], 'integer'],
            [['price_each'], 'number'],
            [['payment_mode'], 'safe'],
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
        $query = PaymentDetails::find();

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
            'order_id' => $this->order_id,
            'product_id' => $this->product_id,
            'quantity_ordered' => $this->quantity_ordered,
            'price_each' => $this->price_each,
        ]);

        $query->andFilterWhere(['like', 'payment_mode', $this->payment_mode]);

        return $dataProvider;
    }
}
