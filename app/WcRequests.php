<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WcRequests
 * @property int $id
 * @property string $unit
 * @property string $room
 * @property string $patient_name
 * @property string $gender
 * @property string $diagnosis
 * @property string $therapist_title
 * @property string $therapist_name
 * @property string $wc_type
 * @property string $wc_model
 * @property string $wc_brand
 * @property string $wc_dimensions
 * @property string $wc_height
 * @property string $wc_back
 * @property string $cushion_type
 * @property string $cushion_dimensions
 * @property string $armrest_type
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereArmrestType($armrest_type)
 * @method static whereCreatedAt($created_at)
 * @method static whereCushionDimensions($cushion_dimensions)
 * @method static whereCushionType($cushion_type)
 * @method static whereDiagnosis($diagnosis)
 * @method static whereGender($gender)
 * @method static whereId($id)
 * @method static wherePatientName($patient_name)
 * @method static whereRoom($room)
 * @method static whereTherapistName($therapist_name)
 * @method static whereTherapistTitle($therapist_title)
 * @method static whereUpdatedAt($updated_at)
 * @method static whereUnit($unit)
 * @method static whereWcBack($wc_back)
 * @method static whereWcBrand($wc_brand)
 * @method static whereWcDimensions($wc_dimensions)
 * @method static whereWcHeight($wc_height)
 * @method static whereWcModel($wc_model)
 * @method static whereWcType($wc_type)
 */
class WcRequests extends Model {
    // Select Field #13 Data Model Class: Wheelchair Requests.
    protected $table='wc_requests';
}


