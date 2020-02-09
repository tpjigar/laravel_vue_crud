<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'uniquecode', 'name', 'username'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['birthdate', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * Get the Emails for the Customer.
     */
    public function emails()
    {
        return $this->hasMany(\App\Email::class);
    }


    /**
     * Get the Phones for the Customer.
     */
    public function phones()
    {
        return $this->hasMany(\App\Phone::class);
    }


    /**
     * Get the Pictures for the Customer.
     */
    public function pictures()
    {
        return $this->hasMany(\App\Picture::class);
    }

}
