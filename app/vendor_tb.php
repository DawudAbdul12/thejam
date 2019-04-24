<?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class vendor_tb extends Model
// {
//     //
// }
namespace App;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class vendor_tb extends Authenticatable
{
    use Notifiable;

    protected $guard = 'vendor';

    protected $fillable = [
        'fname', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}
