<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WheelchairTypes
 * @property int $id
 * @property string $wc_type
 * @property int $wc_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 * @method static whereWcType($wc_type)
 * @method static whereWcTypeId($wc_type_id)
 */
class WheelchairType extends Model {
    // Select Field #8 Data Model Class: WheelchairTypes
    protected $table='wc_types';
}