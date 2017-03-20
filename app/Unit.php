<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Units
 * @property int $id
 * @property string $unit
 * @property int $unit_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereId($id)
 * @method static whereUnit($unit)
 * @method static whereUnitId($unit_id)
 * @method static whereUpdatedAt($updated_at)
 */
class Unit extends Model {
    // Select Field #1 Data Model Class: Units
    protected $table='units';
}