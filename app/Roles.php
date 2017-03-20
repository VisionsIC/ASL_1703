<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
/**
 * App\Role
 * @property int $id
 * @property string $role_title
 * @property string $role_description
 * @property int $role_title_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @method static whereSelect($value)
 * @method static whereCreatedAt($value)
 * @method static whereId($value)
 * @method static whereRoleDescription($value)
 * @method static whereRoleTitle($value)
 * @method static whereRoleTitleId($value)
 * @method static whereUpdatedAt($value)
 */
class Roles extends Model {
    public function users() {
        return $this->belongsToMany('App\User', 'user_role', 'role_id', 'user_id');
    }
}