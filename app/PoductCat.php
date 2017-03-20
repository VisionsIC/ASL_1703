<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\ProductCat
 * @property int $id
 * @property string $product_cat_name
 * @method static whereSelect($value)
 * @method static whereId($value)
 * @method static whereProductCatName($value)
 */
class ProductCat extends Model {
    // This DataModelHandler class Model handles the individual classes of each data model (tables) used in the
    // ASL_RERA Database.
    protected $table='product_cat';
}



