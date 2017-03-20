<?php
namespace App;
use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * App\Admin
 * @property int $id
 * @property string $username
 * @property boolean $sex
 * @property string $slug
 * @property string $firstname
 * @property string $lastname
 * @property string $title
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Roles[] $roles
 * @method static whereCreatedAt($created_at)
 * @method static whereEmail($email)
 * @method static whereFirstname($firstname)
 * @method static whereId($id)
 * @method static whereSex($sex)
 * @method static whereLastname($lastname)
 * @method static wherePassword($password)
 * @method static whereRememberToken($remember_token)
 * @method static whereTitle($title)
 * @method static whereUpdatedAt($updated_at)
 * @method static whereUsername($username)
 * @method static create
 */
class Admin extends Authenticatable {
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     * @var string
     */
    protected $guard = 'admin';
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'username', 'sex', 'firstname', 'lastname', 'title', 'email', 'password', 'avatar', 'slug'
    ];
    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Send the password reset notification.
     * @param  string $token
     * @return void
     */
    public function sendPasswordResetNotification($token) {
        $this->notify(new ResetPassword($token));
    }
    // roles function
    public function roles() {
        return $this->belongsToMany('App\Roles', 'user_role', 'user_id', 'role_id');
    }
    // hasAnyRole function
    public function hasAnyRoles($roles) {
        if (is_array($roles)) {
            foreach ($roles as $role) {
                if ($this->hasRoles($role)) {
                    return true;
                }
            }
        } else {
            if ($this->hasRoles($roles)) {
                return true;
            }
        }
        return false;
    }
    // hasRole function
    public function hasRoles($role) {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }
}