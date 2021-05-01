<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "product".
 *
 * @property int $id
 * @property string $name
 * @property string $unit
 * @property float $taxing
 * @property string $batch_no
 * @property string $manufacturer_date
 * @property string $import_date
 * @property string $expire_date
 * @property int $manufacturer_id
 * @property string $comment
 *
 * @property Inventory[] $inventories
 * @property InventoryIn[] $inventoryIns
 * @property PaymentDetails[] $paymentDetails
 * @property Manufacturer $manufacturer
 */
class Product extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'unit', 'taxing', 'batch_no', 'manufacturer_date', 'import_date', 'expire_date', 'manufacturer_id', 'comment'], 'required'],
            [['taxing'], 'number'],
            [['manufacturer_date', 'import_date', 'expire_date'], 'safe'],
            [['manufacturer_id'], 'integer'],
            [['comment'], 'string'],
            [['name', 'unit'], 'string', 'max' => 100],
            [['batch_no'], 'string', 'max' => 200],
            [['manufacturer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Manufacturer::className(), 'targetAttribute' => ['manufacturer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'unit' => 'Unit',
            'taxing' => 'Taxing',
            'batch_no' => 'Batch No',
            'manufacturer_date' => 'Manufacturer Date',
            'import_date' => 'Import Date',
            'expire_date' => 'Expire Date',
            'manufacturer_id' => 'Manufacturer ID',
            'comment' => 'Comment',
        ];
    }

    /**
     * Gets query for [[Inventories]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventories()
    {
        return $this->hasMany(Inventory::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[InventoryIns]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getInventoryIns()
    {
        return $this->hasMany(InventoryIn::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[PaymentDetails]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPaymentDetails()
    {
        return $this->hasMany(PaymentDetails::className(), ['product_id' => 'id']);
    }

    /**
     * Gets query for [[Manufacturer]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getManufacturer()
    {
        return $this->hasOne(Manufacturer::className(), ['id' => 'manufacturer_id']);
    }
}
