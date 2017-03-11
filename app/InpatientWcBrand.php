<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\InpatientWcBrands
 * @property int $id
 * @property string $inpatient_wc_brand
 * @property int $wc_type_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereId($id)
 * @method static whereInpatientWcBrand($inpatient_wc_brand)
 * @method static whereUpdatedAt($updated_at)
 * @method static whereWcTypeId($wc_type_id)
 */
class InpatientWcBrand extends Model {
    // Select Field #10 Data Model Class: InpatientWcBrands
    protected $table='inpatient_wc_brands';
}