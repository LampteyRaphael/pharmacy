<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "orders".
 *
 * @property int $id
 * @property string $order_date
 * @property string $pay_date
 * @property int $customer_id
 * @property int $user_id
 * @property int $payment_mode
 * @property float $amount_paid
 * @property float $discount
 * @property string $status
 * @property string $comment
 *
 * @property User $user
 * @property Payment $paymentMode
 * @property Customers $customer
 * @property PaymentDetails[] $paymentDetails
 */
class Orders extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orders';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_date', 'pay_date', 'customer_id', 'user_id', 'payment_mode', 'amount_paid', 'discount', 'status', 'comment'], 'required'],
            [['order_date', 'pay_date'], 'safe'],
            [['customer_id', 'user_id', 'payment_mode'], 'integer'],
            [['amount_paid', 'discount'], 'number'],
            [['comment'], 'string'],
            [['status'], 'string', 'max' => 100],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
            [['payment_mode'], 'exist', 'skipOnError' => true, 'targetClass' => Payment::className(), 'targetAttribute' => ['payment_mode' => 'id']],
            [['customer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Customers::className(), 'targetAttribute' => ['customer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order_date' => 'Order Date',
            'pay_date' => 'Pay Date',
            'customer_id' => 'Customer ID',
            'user_id' => 'User ID',
            'payment_mode' => 'Payment Mode',
            'amount_paid' => 'Amount Paid',
            'discount' => 'Discount',
            'status' => 'Status',
            'comment' => 'Comment',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    /**
     * Gets query for [[PaymentMode]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentMode()
    {
        return $this->hasOne(Payment::className(), ['id' => 'payment_mode']);
    }

    /**
     * Gets query for [[Customer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(Customers::className(), ['id' => 'customer_id']);
    }

    /**
     * Gets query for [[PaymentDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentDetails()
    {
        return $this->hasMany(PaymentDetails::className(), ['order_id' => 'id']);
    }
}
