<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\TherapistTitles
 * @property int $id
 * @property string $title
 * @property string $title_abbreviation
 * @property int $therapist_id
 * @property int $title_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereId($id)
 * @method static whereTherapistId($therapist_id)
 * @method static whereTitle($title)
 * @method static whereTitleAbbreviation($title_abbreviation)
 * @method static whereTitleId($title_id)
 * @method static whereUpdatedAt($updated_at)
 */
class TherapistTitle extends Model {
    // Select Field #6 Data Model Class: TherapistTitles
    protected $table='therapist_title';
}