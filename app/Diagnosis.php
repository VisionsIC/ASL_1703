<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Diagnosis
 * @property int $id
 * @property string $diagnosis_type
 * @property string $abbreviation
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereAbbreviation($abbreviation)
 * @method static whereCreatedAt($created_at)
 * @method static whereDiagnosisType($diagnosis_type)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 */
class Diagnosis extends Model {
    // Select Field #5 Data Model Class: Diagnosis
    protected $table='diagnosis';
}