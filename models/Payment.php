<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "payment".
 *
 * @property int $id
 * @property string $payment_mode
 * @property string $cheque_no
 * @property string $cheque_date
 * @property string $bank
 *
 * @property Orders[] $orders
 */
class Payment extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'payment';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['payment_mode', 'cheque_no', 'cheque_date', 'bank'], 'required'],
            [['cheque_date'], 'safe'],
            [['payment_mode', 'cheque_no'], 'string', 'max' => 100],
            [['bank'], 'string', 'max' => 40],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'payment_mode' => 'Payment Mode',
            'cheque_no' => 'Cheque No',
            'cheque_date' => 'Cheque Date',
            'bank' => 'Bank',
        ];
    }

    /**
     * Gets query for [[Orders]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasMany(Orders::className(), ['payment_mode' => 'id']);
    }
}
