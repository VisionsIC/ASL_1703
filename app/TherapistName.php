<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\TherapistNames
 * @property int $id
 * @property string $therapist_names
 * @property int $title_id
 * @method static whereId($id)
 * @method static whereTherapistNames($therapist_names)
 * @method static whereTitleId($title_id)
 */
class TherapistName extends Model {
    // Select Field #7 Data Model Class: TherapistNames
    protected $table='therapist_name';
}