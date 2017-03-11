<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Rooms
 * @property int $id
 * @property string $diagnosis_abbreviation
 * @property int $diagnosis_type_id
 * @property int $gender_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereDiagnosisAbbreviation($diagnosis_abbreviation)
 * @method static whereDiagnosisTypeId($diagnosis_type_id)
 * @method static whereGenderId($gender_id)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 */
class InpatientDiagnosis extends Model {
// Select Field #3 Data Model Class: Inpatient Diagnosis
    protected $table='inpatient_diagnosis';
}
