<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\InpatientWcModels
 * @property int $id
 * @property string $inpatient_wc_model
 * @property int $inpatient_wc_brands_id
 * @property int $inpatient_wc_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereId($id)
 * @method static whereInpatientWcBrandsId($inpatient_wc_brands_id)
 * @method static whereInpatientWcModel($inpatient_wc_model)
 * @method static whereInpatientWcTypeId($inpatient_wc_type_id)
 * @method static whereUpdatedAt($updated_at)
 */
class InpatientWcModel extends Model {
    // Select Field #9 Data Model Class: InpatientWcModels
    protected $table='inpatient_wc_models';
}