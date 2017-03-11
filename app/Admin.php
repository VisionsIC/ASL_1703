<?php
namespace App;
use App\Notifications\AdminResetPassword;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * App\Admin
 * @property int $id
 * @property string $username
 * @property string $firstname
 * @property string $lastname
 * @property string $title
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @method static whereCreatedAt($value)
 * @method static whereEmail($value)
 * @method static whereFirstname($value)
 * @method static whereId($value)
 * @method static whereLastname($value)
 * @method static wherePassword($value)
 * @method static whereRememberToken($value)
 * @method static whereTitle($value)
 * @method static whereUpdatedAt($value)
 * @method static whereUsername($value)
 */
class Admin extends Authenticatable {
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'username', 'firstname', 'lastname', 'title', 'email', 'password',
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
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token) {
        $this->notify(new AdminResetPassword($token));
    }
}