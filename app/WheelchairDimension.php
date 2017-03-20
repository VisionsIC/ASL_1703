<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WheelchairDimensions
 * @property int $id
 * @property string $wc_dimensions
 * @property int $wc_dimensions_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 * @method static whereWcDimensions($wc_dimensions)
 * @method static whereWcDimensionsId($wc_dimensions_id)
 */
class WheelchairDimension extends Model {
    // Select Field #11 Data Model Class: WheelchairDimensions
    protected $table='wc_dimensions';
}