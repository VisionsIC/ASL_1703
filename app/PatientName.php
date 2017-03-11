<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\PatientNames
 * @property int $id
 * @property string $patient_name
 * @property int $gender_id
 * @property int $diagnosis_id
 * @property int $unit_id
 * @property int $room_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereDiagnosisId($diagnosis_id)
 * @method static whereGenderId($gender_id)
 * @method static whereId($id)
 * @method static wherePatientName($patient_name)
 * @method static whereRoomId($room_id)
 * @method static whereUnitId($unit_id)
 * @method static whereUpdatedAt($updated_at)
 */
class PatientName extends Model {
    // Select Field #2 Data Model Class: PatientName
    protected $table='inpatients';
}