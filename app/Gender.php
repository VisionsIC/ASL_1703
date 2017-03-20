<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Gender
 * @property int $id
 * @property string $gender
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereGender($gender)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 */
class Gender extends Model {
    // Select Field #4 Data Model Class: Gender
    protected $table='gender';
}