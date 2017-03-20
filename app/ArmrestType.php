<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\ArmrestTypes
 * @property int $id
 * @property string $armrest_type
 * @property int $armrest_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereArmrestType($armrest_type)
 * @method static whereArmrestTypeId($armrest_type_id)
 * @method static whereCreatedAt($created_at)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 */
class ArmrestType extends Model {
    // Select Field #16 Data Model Class: ArmrestTypes
    protected $table='armrest_type';
}