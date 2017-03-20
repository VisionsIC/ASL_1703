<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Models
 * @property int $id
 * @property int $maker_id
 * @property string $name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereDescription($value)
 * @method static whereId($value)
 * @method static whereMakerId($value)
 * @method static whereName($value)
 * @method static whereUpdatedAt($value)
 */
class Models extends Model {
    // maker function
    public function maker(){
        return $this->belongs_to('Makers');
    }
}