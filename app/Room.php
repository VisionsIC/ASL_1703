<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Rooms
 * @property int $id
 * @property string $room
 * @property int $unit_id
 * @property int $diagnosis_id
 * @property int $inpatient_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereDiagnosisId($diagnosis_id)
 * @method static whereId($id)
 * @method static whereInpatientId($inpatient_id)
 * @method static whereRoom($room)
 * @method static whereUnitId($unit_id)
 * @method static whereUpdatedAt($updated_at)
 */
class Room extends Model {
    // Select Field #3 Data Model Class: Rooms
    protected $table='rooms';
    //
    public function diagnosis() {
        return $this->hasOne('App\Diagnosis');
    }
}