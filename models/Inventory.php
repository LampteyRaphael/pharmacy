<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "inventory".
 *
 * @property int $id
 * @property int $product_id
 * @property int $bb_unit
 * @property int $strip_unit
 * @property int $tcv_unit
 * @property float $bb_cost
 * @property float $strip_cost
 * @property float $tcv_cost
 * @property float $bb_price
 * @property float $strip_price
 * @property float $tcv_price
 *
 * @property Product $product
 */
class Inventory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'inventory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product_id', 'bb_unit', 'strip_unit', 'tcv_unit', 'bb_cost', 'strip_cost', 'tcv_cost', 'bb_price', 'strip_price', 'tcv_price'], 'required'],
            [['product_id', 'bb_unit', 'strip_unit', 'tcv_unit'], 'integer'],
            [['bb_cost', 'strip_cost', 'tcv_cost', 'bb_price', 'strip_price', 'tcv_price'], 'number'],
            [['product_id'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product_id' => 'Product ID',
            'bb_unit' => 'Bb Unit',
            'strip_unit' => 'Strip Unit',
            'tcv_unit' => 'Tcv Unit',
            'bb_cost' => 'Bb Cost',
            'strip_cost' => 'Strip Cost',
            'tcv_cost' => 'Tcv Cost',
            'bb_price' => 'Bb Price',
            'strip_price' => 'Strip Price',
            'tcv_price' => 'Tcv Price',
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
}
