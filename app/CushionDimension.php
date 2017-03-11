<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\CushionDimensions
 * @property int $id
 * @property string $cushion_dimensions
 * @property int $cushion_dimensions_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereCreatedAt($created_at)
 * @method static whereCushionDimensions($cushion_dimensions)
 * @method static whereCushionDimensionsId($cushion_dimensions_id)
 * @method static whereId($id)
 * @method static whereUpdatedAt($updated_at)
 */
class CushionDimension extends Model {
    // Select Field #15 Data Model Class: CushionDimensions
    protected $table='cushion_dimensions';
}