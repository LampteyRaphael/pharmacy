<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment_details".
 *
 * @property int $id
 * @property int $order_id
 * @property int $product_id
 * @property int $quantity_ordered
 * @property float $price_each
 * @property string $payment_mode
 *
 * @property Product $product
 * @property Orders $order
 */
class PaymentDetails extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment_details';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'product_id', 'quantity_ordered', 'price_each', 'payment_mode'], 'required'],
            [['order_id', 'product_id', 'quantity_ordered'], 'integer'],
            [['price_each'], 'number'],
            [['payment_mode'], 'string', 'max' => 100],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
            [['order_id'], 'exist', 'skipOnError' => true, 'targetClass' => Orders::className(), 'targetAttribute' => ['order_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_id' => 'Order ID',
            'product_id' => 'Product ID',
            'quantity_ordered' => 'Quantity Ordered',
            'price_each' => 'Price Each',
            'payment_mode' => 'Payment Mode',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(Product::className(), ['id' => 'product_id']);
    }

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(Orders::className(), ['id' => 'order_id']);
    }
}
