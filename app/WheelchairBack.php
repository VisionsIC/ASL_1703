<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WheelchairBack
 * @property int $id
 * @property string $wc_back_type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereWcBackType($wc_back_type)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 */
class WheelchairBack extends Model {
    // Select Field #13 Data Model Class: WheelchairBacks
    protected $table='wc_back_type';
}
