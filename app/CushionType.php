<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\CushionTypes
 * @property int $id
 * @property string $cushion_type
 * @property int $cushion_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereCushionType($cushion_type)
 * @method static whereCushionTypeId($cushion_type_id)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 */
class CushionType extends Model {
    // Select Field #14 Data Model Class: CushionTypes
    protected $table='cushion_type';
}