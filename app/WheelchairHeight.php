<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WheelchairHeights
 * @property int $id
 * @property string $wc_height
 * @property int $wc_height_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereWcHeight($wc_height)
 * @method static whereWcHeightId($wc_height_id)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 */
class WheelchairHeight extends Model {
    // Select Field #12 Data Model Class: WheelchairHeights
    protected $table='wc_heights';
}