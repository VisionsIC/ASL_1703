<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\WcRequest
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
 * @method static whereArmrestType($armrest_type)
 * @method static whereCushionDimensions($cushion_dimensions)
 * @method static whereCushionType($cushion_type)
 * @method static whereDiagnosis($diagnosis)
 * @method static whereGender($gender)
 * @method static whereId($id)
 * @method static wherePatientName($patient_name)
 * @method static whereRoom($room)
 * @method static whereTherapistName($therapist_name)
 * @method static whereTherapistTitle($therapist_title)
 * @method static whereUnit($unit)
 * @method static whereWcBack($wc_back)
 * @method static whereWcBrand($wc_brand)
 * @method static whereWcDimensions($wc_dimensions)
 * @method static whereWcHeight($wc_height)
 * @method static whereWcModel($wc_model)
 * @method static whereWcType($wc_type)
 */
class WcRequest extends Model {

    public $timestamps = false;
    // All the assigned "fillable" fields.
    protected $fillable = ['unit', 'room', 'patient_name', 'gender', 'diagnosis', 'therapist_title','therapist_name',
        'wc_type', 'wc_model', 'wc_brand', 'wc_dimensions', 'wc_height', 'wc_back', 'cushion_type', 'cushion_dimensions'
        , 'armrest_type'];
    // Protected table.
    protected $table='wc_requests';
}


