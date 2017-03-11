<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class FormData extends Model {
    /*** The attributes that are mass assignable.
         * @var array
    */
    protected $fillable = [
        'unit', 'room', 'firstname', 'lastname', 'gender', 'diagnosis', 'therapist_name', ''
    ];
}