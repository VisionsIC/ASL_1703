<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Makers
 * @property int $id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereDescription($value)
 * @method static whereId($value)
 * @method static whereName($value)
 * @method static whereUpdatedAt($value)
 */
class Makers extends Model {
    // Makers Model
    public function models(){
        return $this->has_many('Models');
    }
}