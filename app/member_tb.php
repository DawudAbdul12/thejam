<?php

// namespace App;

// use Illuminate\Database\Eloquent\Model;

// class member_tb extends Model
// {
//     //
// }

    namespace App;

    use Illuminate\Notifications\Notifiable;
    use Illuminate\Foundation\Auth\User as Authenticatable;

    class member_tb extends Authenticatable
    {
        use Notifiable;

        protected $guard = 'member';

        protected $fillable = [
            'fname', 'email', 'password',
        ];

        protected $hidden = [
            'password', 'remember_token',
        ];
    }