<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\RequestWheelchair
 * @property int $id
 * @property string $wcrequest
 * @property string $unit
 * @property string $room
 * @property string $patientname
 * @property string $gender
 * @property string $diagnosis
 * @property string $therapisttitle
 * @property string $therapistname
 * @property string $description
 * @method static whereDescription($description)
 * @method static whereDiagnosis($diagnosis)
 * @method static whereGender($gender)
 * @method static whereId($id)
 * @method static wherePatientname($patientname)
 * @method static whereRoom($room)
 * @method static whereTherapistname($therapistname)
 * @method static whereTherapisttitle($therapisttitle)
 * @method static whereUnit($unit)
 * @method static whereWcrequest($wcrequest)
 */
class RequestWheelchair extends Model {
    // This is the Request Model.
    protected $table ='wheelchair_requests';
    public $fillable = ['unit','room', 'patientname', 'gender', 'diagnosis', 'therapisttitle',
        'therapistname', 'wcrequest', 'description' ];
}