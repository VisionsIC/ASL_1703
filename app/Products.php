<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Products
 * @property int $id
 * @property string $productname
 * @property int $qty
 * @property float $price
 * @property int $prod_cat_id
 * @method static whereSelect($value)
 * @method static whereId($value)
 * @method static wherePrice($value)
 * @method static whereProdCatId($value)
 * @method static whereProductname($value)
 * @method static whereQty($value)
 */
class Products extends Model {
    // This Products table is protected by the Products class.
    protected $table='products';
}